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
			<h1 class="sp-heading pb-4">Reset Password</h1>
			<form>
				<div class="mb-3 text-start">
				  <label for="exampleInputPhoneNumber1" class="form-label form-lbl text-yellow">Phone Number</label>
				  <input type="phone number" class="form-control" id="exampleInputPhoneNumber1" aria-describedby="PhoneNumberHelp">  
				</div>
                <div class="d-grid gap-2 pb-3">
					<a href="verify-password.php" class="btn btn-primary form-btn" type="button">SEND CODE</a>
				
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