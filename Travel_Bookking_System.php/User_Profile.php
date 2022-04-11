<?php
session_start();
include "dbcon.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="User_Home.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="User_History.php" class="nav-link">History</a></li>
		  <li class="nav-item"><a href="User_Profile.php" class="nav-link">Profile</a></li>
          <li class="nav-item"><a href="User_Change_Pwd.php" class="nav-link">Change Pwd</a></li>
		  <li class="nav-item"><a href="User_Feedback.php" class="nav-link">Feedback</a></li>
		  <li class="nav-item"><a href="Login.php" class="nav-link">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- END nav -->
    <script src="validator.js"></script>
    <div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="">Home</a></span> <span>Profile</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Profile</h1>
          </div>
        </div>
      </div>
    </div>

	<?php    
	$id=$_SESSION["uid"];
	$t2="";$t3="";$t4="";
	$result=mysql_query("select * from registration where loginid='$id'",$db);
	  while($row=mysql_fetch_array($result))
	  {
		$t2=$row[1];
		$t3=$row[2];
		$t4=$row[3];
	  }
	  mysql_close();
	?>
  
		<section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">        
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
            <form action="User_Profile_Code.php" method="post" id="myform">
			  <div class="form-group">
                <input type="text" class="form-control" readonly value="<?php echo $id;?>" name="id">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="name" value="<?php echo $t2;?>" name="uname">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" id="phone" value="<?php echo $t3;?>" name="phone">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="email" value="<?php echo $t4;?>" name="email">
              </div>
              <div class="form-group">
                <input type="submit" value="Edit Profile" name="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
			<?php
				if(isset($_GET["msg"]))
				{
					$msg=$_GET["msg"];
					if($msg=="0")
						echo "<span style='color:red'>* Sry! Profile Not Updated</span>";
					else
						echo "<span style='color:green'> Profile Updated Successfully..</span>";
				}
			?>
          </div>
        </div>
      </div>
    </section>

<script>
	var validator=new Validator("myform");

	//validator.addValidation("t1","req","Please Enter Field");
	validator.addValidation("name","alpha","Enter Only Char in User Name");
	validator.addValidation("phone","num","Enter Only No in Phone No");
	validator.addValidation("email","email","Invalid Email Format");
	</script> 

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
        
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About</a></li>
                <li><a href="#" class="py-2 d-block">Service</a></li>
                <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="#" class="py-2 d-block">How it works</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          
        </div>
          <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by <a href="https://colorlib.com" target="_blank">Optimus Infotech</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>