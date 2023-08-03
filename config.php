<?php 
session_start();
$host = 'localhost';
$dbname = 'lipaeazy';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST['submit'])) {
    // Retrieve form data
    $phone_number = $_POST['phone_number'];
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validate form data
    $errors = array();
    if(empty($phone_number)) {
        echo "Phone number is required";
        return;
    } elseif(!preg_match('/^[0-9]{10}$/', $phone_number)) {
        echo"Phone number should be a valid 10-digit phone number"
        ;return;
    }
    if(empty($full_name)) {
       echo "full_name is required"; 
       return;
    } 
    if(empty($password)) {
        echo "Password is required";
        return;
    }
    if(empty($confirm_password)) {
        echo "Confirm password is required";
        return;
    } elseif($password !== $confirm_password) {
        echo "Passwords do not match";
        return;
    }
    
    // If form data is valid, process the form
    if(empty($errors)) {
        $verification_code=rand(1000, 9999);
        // Perform necessary actions, such as saving data to a database
        // For example, you could insert the form data into a "users" table in the database
        $stmt = $conn->prepare("INSERT INTO register_users (full_name,phone_number, password, verification_code, created) VALUES (:full_name, :phone_number, :password, :verification_code, now())");
        $stmt->bindParam(':full_name', $full_name);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':verification_code', $verification_code);
        $stmt->execute();
        $_SESSION["full_name"] = $full_name;
        //store session line 61
        $_SESSION["phone_number"] = $phone_number;
        
        // Redirect user to the next page or display a success message
        header("Location: verify-register.php");
        exit;
    }
}
elseif (isset($_POST['verify'])) {
    $verification_code = $_POST['verification_code'];
    $phone_number=$_SESSION["phone_number"] ;
    $stmt = $conn->prepare("SELECT ID FROM register_users WHERE phone_number=:phone_number AND verification_code=:verification_code LIMIT 1");
       $stmt->bindParam(':verification_code', $verification_code);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->execute();
    // code...
        // check if a row was found
if ($stmt->rowCount() === 0) {
      $_SESSION["message"] = "wrong verification code";
        header("Location: verify-register.php");
        exit;
}
else {
    header("Location: index.html");
        exit;

}
}
elseif (isset($_POST['forgot'])) {
    $verification_code = $_POST['verification_code'];
    $phone_number=$_SESSION["phone_number"] ;
    $stmt = $conn->prepare("SELECT ID FROM register_users WHERE phone_number=:phone_number AND verification_code=:verification_code LIMIT 1");
       $stmt->bindParam(':verification_code', $verification_code);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->execute();
    // code...
        // check if a row was found
if ($stmt->rowCount() === 0) {
      $_SESSION["message"] = "wrong verification code";
        header("Location: verify-password.php");
        exit;
}
else {
    header("Location: index.html");
        exit;

}
}
elseif (isset($_POST['login'])) {
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
      if(empty($phone_number)) {
        $_SESSION["message"] = "phone number is required";
        header("Location: login.php");
        exit;
    } elseif(!preg_match('/^[0-9]{10}$/', $phone_number)) {
       
        $_SESSION["message"] = "Phone number should be a valid 10-digit phone number";
        header("Location: login.php");
        exit;
    }
  elseif(empty($password)) {
        $_SESSION["message"] = "Password is required";
        header("Location: login.php");
        exit;
        
    }
       $stmt = $conn->prepare("SELECT ID,full_name FROM register_users WHERE phone_number=:phone_number AND password=:password LIMIT 1");
       $stmt->bindParam(':password', $password);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->execute();
    // code...
        // check if a row was found
if ($stmt->rowCount() === 0) {
        $_SESSION["message"] = "Wrong username or password";
        header("Location: login.php");
        exit;
  
}
else {
    $params=$stmt->fetch(PDO::FETCH_ASSOC);
    $_SESSION["phone_number"]=$phone_number ;
    $_SESSION["full_name"]=$params["full_name"];
    $_SESSION["logged_in"]=true;
//echo "name: ".$params["full_name"];
    header("Location: index.html");
    //session_destroy();
    exit;
}
}
?>
