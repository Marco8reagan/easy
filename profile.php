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
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars-offcanvas/">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css.map" >
  <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
  
        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
  
        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }
  
        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }
  
        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }
  
        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }
        .form-control-dark {
  border-color: var(--bs-gray);
}
.form-control-dark:focus {
  border-color: #fff;
  box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
}

.text-small {
  font-size: 85%;
}

.dropdown-toggle {
  outline: 0;
}

      </style>
</head>
<body bgcolor="#E6E6FA">

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
<div id="main">
<div class="wrapper">
      <!-- header -->
<header class="py-3 mb-3 sticky-top" style="background-color: #031F4B;">
              <div class="container-fluid d-grid gap-3 align-items-center">
                <div class="row text-white"><div class="col-5"><a href="home.html" style="text-decoration: none; color: white;"><i class="bi bi-chevron-left float-left"></i></a></div><div class="col-6"><h2 style="text-align: left !important;">PROFILE</h2></div></div>
<!--<a class="navbar-brand" href="#">Expand at sm</a>-->
</div>  
</header>
<hr></hr>
<div class="card" style="background: #033161; margin: 10px;">
<div class="card-body">
  <div class="row">
    <div class="col-12 d-flex justify-content-between">
      <div class="text-white">Profile Picture</div>
      <div>
       <i class="bi bi-pencil-square" style="color: yellow;"></i>
      </div>
    </div>
<div class="col-12 d-flex justify-content-center">
  <i class="bi bi-person-circle" style="font-size: 100px; color: white;"></i>
</div>
</div>   
  </div>
</div>
<div class="card" style="background: #033161; margin: 10px;">
<div class="card-body">
  <div class="row">
    <div class="col-12 d-flex justify-content-between">
      <div class="text-white">Bio</div>
      <div>
       <i class="bi bi-pencil-square" style="color: yellow;"></i>
      </div>
    </div>
    <a style="color: white; text-align: center; font-size: 18px;"><?php echo $_SESSION["full_name"];?></a>
</div>   
  </div>
</div>
<div class="card" style="background: #033161; margin: 10px;">
<div class="card-body">
  <div class="row">
    <div class="col-12 d-flex justify-content-between">
      <div class="text-white">Contact Info</div>
      <div>
       <i class="bi bi-pencil-square" style="color: yellow;"></i>
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <i class="bi bi-telephone-fill text-white"><a style="color: white; margin-left: 10px; font-weight: lighter;"> <?php echo $_SESSION["phone_number"];?></a></i>
      </div>
      <hr style="width: 78%;margin-left: 34px;">
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <i class="bi bi-envelope-fill text-white"><a style="color: white; margin-left: 10px; font-weight: lighter;">Email: marcusreagan60@gmail.com</a></i>
      </div>
      <hr style="width: 78%;margin-left: 34px;">
    </div>
</div>   
  </div>
</div>
  <div class="card" style="background: #033161; margin: 10px;">
<div class="card-body">
  <div class="row">
    <div class="col-12 d-flex justify-content-between">
      <div class="text-white">My Payment Accounts</div>
      <div>
       <i class="bi bi-pencil-square" style="color: yellow;"></i>
      </div>
    </div>
</div>   
  </div>
</div>
  <div class="card" style="background: #033161; margin: 10px;">
<div class="card-body">
  <div class="row">
    <div class="col-12 d-flex justify-content-between">
      <div class="text-white">My Bills</div>
</div>   
    </div>

  </div>
</div>
<!-- footer --> 
<div class="row pt-3">
          <div class="col-12 d-flex justify-content-around text-center mb-4">
            <div class="footer-listing">
              <a href="home.html"><i class="bi bi-house-fill" style="color: white;font-size: 40px;"></i></a>
            </div>
            <div class="footer-listing">
              <a href="transactions.html"><i class="bi bi-receipt" style="color: white;font-size: 40px;"></i></a>
            </div>
            <div class="footer-listing"><a href="#"><i class="bi bi-person-fill" style="color: yellow;font-size: 40px;"></i></a></div>
        </div>
</div> 
</div>
</div>
</div>
<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="assets/js/jquery-3.6.1.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/dist/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>