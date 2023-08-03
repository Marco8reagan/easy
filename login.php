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
	<link rel="stylesheet" type="text/css" href="style.css?v=1.1">    
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
					<h1 class="sp-heading pb-4">Welcome Back,</h1>
					<h4 class="sp-heading pb-2">Sign in to continue</h4>
								
					 <form action="config.php" method="POST">
						<div class="mb-3 text-start">
							<label for="exampleInputEmail/PhoneNumber1" class="form-label text-yellow form-lbl">Phone Number</label>
							<input type="text" class="form-control" name="phone_number" id="exampleInputEmail/PhoneNumber1" aria-describedby="email/PhoneNumberHelp">
						
      <?php if(isset($errors['phone_number'])){
							  ?>
        <div class="invalid-feedback">
            <?php echo $errors['phone_number']; ?>
        </div>
    <?php }  ?>
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
						<div class="d-grid gap-2 pb-3">
							<button type="submit" class="btn btn-primary form-btn" name="login">login</button>
						</div>
						<a href="forgot-password.php">
							<h4 class="sp-heading pt-1">
								<span style="font-weight: 300; color: white;">Forgot Password?</span>
								<span style="font-style: normal;font-weight: 700; color:yellow;">Get Now</span>
							</h4>
						</a>
						<a href="register.php">
							<h4 class="sp-heading pt-1">
								<span style="font-weight: 300; color: white;">Don’t have an account?</span>
								<span style="font-style: normal;font-weight: 700;color:yellow;">Register</span>
							</h4>
						</a>
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
