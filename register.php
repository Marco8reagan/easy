<?php 
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lipa Eazy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">

          
</head>
<body>
    <div class="wrapper">
        <div class="container vertical text-center d-flex justify-items-center">
            <div class="row">
                <div class="col-12">
                    <h1 class="sp-heading pb-4">Welcome,</h1>
                    <h4 class="sp-heading pb-2">Register to continue</h4>
                                    
                   <form action="config.php" method="POST">
                   	 	<div class="mb-3 text-start">
                          <label for="exampleInputfullname" class="form-label text-yellow form-lbl">Full Name</label>
                          <input type="tel" class="form-control" id="exampleInputfullname" name="full_name" aria-describedby="fullnameHelp">  
                        </div>
                   	<div class="mb-3 text-start">
                          <label for="exampleInputPhoneNumber1" class="form-label text-yellow form-lbl">Phone Number</label>
                          <input type="tel" class="form-control" id="exampleInputPhoneNumber1" name="phone_number" aria-describedby="PhoneNumberHelp">  
                        </div>
                        <div class="mb-3 text-start">
    <label for="exampleInputPassword" class="form-label text-yellow form-lbl">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="password" aria-describedby="passwordHelp">
    <?php if(isset($errors['password'])){

    ?>
        <div class="invalid-feedback">
            <?php echo $errors['password']; ?>
        </div>
    <?php }  ?>
</div>
<div class="mb-3 text-start">
    <label for="exampleInputPassword" class="form-label text-yellow form-lbl">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" name="confirm_password" aria-describedby="passwordHelp">
    <?php if(isset($errors['confirm_password'])){ ?>
        <div class="invalid-feedback">
            <?php echo $errors['confirm_password']; ?>
        </div>
    <?php }  ?>
</div>

<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="terms_and_conditions">
    <label class="form-check-label" for="exampleCheck1"><span style="color: #ffffff;">I agree to the </span><span style="color: #ffd700">Terms & Conditions</span></label>
    <?php if(isset($errors['terms_and_conditions'])){ ?>
        <div class="invalid-feedback">
            <?php echo $errors['terms_and_conditions']; ?>
        </div>
    <?php }  ?>
</div>
<div class="d-grid gap-2 pb-3">
   <button class="btn btn-primary form-btn" type="submit" name="submit">Register</button>
</div>
</form>

<a href="login.html"><h4 class="sp-heading pt-1">
    <span style="font-weight: 300; color: white;">Have an account already?</span>
    <span style="font-style: normal;font-weight: 700; color: yellow;">Login</span></h4></a>
</div>
</div>
</div>
</div>


<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="assets/js/jquery-3.6.1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

