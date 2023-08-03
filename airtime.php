<?php

include 'config.php';
if(!isset( $_SESSION["logged_in"]))//to disallow verification without phone number
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
	<link rel="stylesheet" type="text/css" href="style.css?v=1.1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  	
        
</head>
<body>
		<div class="wrapper">
			     <header class="py-3 mb-3">
              <div class="container-fluid d-grid gap-3 align-items-center">
              	<div class="row text-white"><div class="col-5"><a href="home.html" style="text-decoration: none; color: white;"><i class="bi bi-chevron-left float-left"></i></a></div><div class="col-6"><h2 style="text-align: left !important;">Buy Airtime</h2></div></div>
              	<hr></hr>
                     <div class="d-flex justify-content-between">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" style="color: yellow;">send to</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page"href="airtime.html" style="color: white;font-weight: bolder;">self</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" aria-current="page" href="otherairtime.html" style="color: white; font-weight: lighter;">other</a>
  </li>
</ul>
                  </div>               
                  <!--<a class="navbar-brand" href="#">Expand at sm</a>-->
                  
                </div>
              </header>
<div class="container text-center d-flex justify-content-center justify-items-center py-5">
	<div class="row">
		<div class="col-12">
			<form>
				<div class="mb-3 text-start">
				  <label for="exampleInputEmail/PhoneNumber1" class="form-label text-yellow form-lbl">Enter Amount</label>
				  <input type="email/phone number" class="form-control" id="exampleInputEmail/PhoneNumber1" aria-describedby="email/PhoneNumberHelp">  
				  <a style="color: #FFD700;">Pay Via</a>
				</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
  <label class="form-check-label" for="inlineRadio1" style="color: greenyellow;">M-PESA</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
  <label class="form-check-label" for="inlineRadio2"  style="color: red;">Airtel Money</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
  <label class="form-check-label" for="inlineRadio3" style="color: skyblue;">Card</label>
</div>
			  </form>
		</div>
	</div>
</div>
</div>
<!-- JavaScript Bundle with Popper -->

  <script type="text/javascript" src="assets/js/radio.js"></script>
<script type="text/javascript" src="assets/js/jquery-3.6.1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>
</html>