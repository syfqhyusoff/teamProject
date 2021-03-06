<?php

include 'db_connection.php';

$conn = OpenCon();

//echo "Connected Successfully";

session_start();
if(isset($_SESSION['loginUser'])) {
  //echo "Your session is running " . $_SESSION['loginUser'];
}



$username = $_SESSION['username'];

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>1 Million Traders - Universiti Putra Malaysia % PKT Logistic Group Sdn Bhd</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- bootstrap-css -->
<link href="src/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="src/css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="src/css/plan.css" type="text/css" media="all" />
<!--// css -->
<!-- gallery -->
<link type="text/css" rel="stylesheet" href="src/css/cm-overlay.css" />
<!-- //gallery -->
<!-- font-awesome icons -->
<link href="src/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link type="text/css" rel="stylesheet" href="src/css/fontJosefinSans.css" />
<link type="text/css" rel="stylesheet" href="src/css/fontRobotoCondensed.css" />
<!-- //font -->
<script src="src/js/jquery-1.11.1.min.js"></script>
<script src="src/js/bootstrap.js"></script>
<script src="src/js/planTabs.js"></script>
<script src="src/js/timer.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- animation -->
<link href="src/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="src/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!-- //animation --> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="">
		<div class="agileinfo-dot">
			<div class="header">
				<div class="container">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="fixed" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="agileits-logo">
								<h1><a href="index.php"><img src="src/images/logo1.png" alt="" /> 1 Million Traders </a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="#events" class="scroll">Events</a></li>
									<li><a href="#news" class="scroll">News</a></li>
									<li><a href="#news" class="scroll">Plan & Upgrade</a></li>
                                    <li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" >
										<?php										
											if($_SESSION['loginUser']==true){ 
												echo $username;
											} 
										?>
										<span class="caret"></span></a>
										<ul class="dropdown-menu" > 
										  <li><a href="profile.php">Profile</a></li>
											<li><a href="invitationCode.php" >Invitation Code</a></li>
											<li><a href="#">Setting</a></li>
											<li><a href="logout.php">Logout</a></li>
										</ul> 
									</li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
        	
	
	
	<!-- profile -->
	<div class="contact-form">
		<div class="contact-form-center">
			<div class="w3l-heading">
				<h3>Membership Plan for Student</h3>
				<div class="w3ls-border"> </div>
			</div></br>
			
			<div class="panel panel-info">
            <div class="panel-body">

				<div class="row" style="margin:2px;">
				  <!--Silver-->                  
					<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
						<div class="blocks">
							<div class="block-header">
							  <h4>Upgrade to GOLD?</h4>
							  <p>Pay RM50 to upgrade</p>
							</div>
							
							<div class="block-footer">
								<form action="checkoutUpgrade.php" method="POST">
								<button type="submit" class="subscribe-now" name="userTypeUp" id="userTypeUp" value="Gold">Upgrade Now</button>


								
							</form>
							</div>
						</div>
					</div>
				  <!--Gold-->                  
					<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
						<div class="blocks">
							<div class="block-header">
								<h4>Upgrade to DIAMOND?</h4>
								<p>Pay RM100 to upgrade</p>
							</div>
							
							<div class="block-footer">
								<form action="checkoutUpgrade.php" method="POST">
								<button type="submit" class="subscribe-now" name="userTypeUp" id="userTypeUp" value="Diamond">Upgrade Now</button>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		</div>
		</div>
	<!-- //profile -->

	<!-- footer -->
	<footer>
		<div class="container">
			<p>© 2018 1MillionTraders . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</footer>
	<!-- //footer -->
	<script src="src/js/jarallax.js"></script>
	<script src="src/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="src/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="src/js/move-top.js"></script>
	<script type="text/javascript" src="src/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
<!-- //here ends scrolling icon -->
</body>	
</html>
