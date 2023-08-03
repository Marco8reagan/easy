<?php 
include 'config.php';
if(!isset( $_SESSION["phone_number"]))//to disallow verification without phone number
{
	 header("Location: login.php");
}
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
		<?php if (isset($_SESSION['message'])){?>
			<div class="col-12">
						<div class="alert alert-primary" role="alert">
 <?php echo $_SESSION['message']; ?>
</div>
<?php }?>
		<div class="col-12">
			<h1 class="sp-heading pb-4">Verify</h1>
            <h4 class="sp-heading py-1">Enter verification Code<br>
                sent to phone number <?php echo $_SESSION["phone_number"];?><br>
                to Reset Password</h4>
			 <form action="config.php" method="POST">
				<div class="mb-3 text-start">
				 				  <input name="verification_code" type="email/phone number" class="form-control" id="exampleInputEmail/PhoneNumber1" aria-describedby="email/PhoneNumberHelp">  
				</div>
                <div class="d-grid gap-2 pb-3">
					<button type="submit" class="btn btn-primary form-btn" name="forgot">Submit</button>

				 <h4 class="sp-heading"><span style="font-family: 'Montserrat'; font-style: normal; font-weight: 400;font-size: 15px; color: #ffffff">Didn’t receive verification code?</span><span style="font-style: normal;
					font-weight: 700; color: #FFD700; font-family: 'Montserrat'; font-style: normal; font-weight: 700; font-size: 15px;"><br>Resend Code.</span></h4>
				  </div>
			  </form>
		</div>
	</div>
</div>
</div>
<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="assets/js/jquery-3.6.1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>