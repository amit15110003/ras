<!DOCTYPE html>

<html lang="en">


<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Rajiv Academy Of Sciences|RAS</title>



<!-- Bootstrap style sheet -->

<link href="<?php echo base_url();?>media/css/bootstrap.min.css" rel="stylesheet">

<!-- css style sheet -->

<link id="style" rel="stylesheet" href="<?php echo base_url();?>media/css/style.css">
<link id="style" rel="stylesheet" href="<?php echo base_url();?>media/css/styledb.css">
<link id="style" rel="stylesheet" href="<?php echo base_url();?>media/css/styledb-mob.css">


<link id="colors" rel="stylesheet" href="<?php echo base_url();?>media/css/color.css">

<link rel="stylesheet" href="<?php echo base_url();?>media/css/switcher.css">



<link rel="stylesheet" href="<?php echo base_url();?>media/css/font-awesome.css">

<link rel="stylesheet" href="<?php echo base_url();?>media/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>media/css/owl.carousel.css">
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i%2cOxygen:300,400,700" rel="stylesheet"> 


</head>

<body>

	<!--1st header
		<div id="wrapper">

			<div class="top-bar4">

				<div class="container">

					<div class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>media/images/logonw.png" width="130" height="70" alt="descipline"></a></div>

					<div class="right-panel">
						<ul class="login-list">
							<?php if ($this->session->userdata('u_card')){ ?>
							<li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i><?php echo $result = substr($this->session->userdata('u_name'), 0, 6); ?></a></li>

							<li><a href="<?php echo base_url();?>index.php/ras/logout" ><i class="fa fa-sign-in" aria-hidden="true"></i>logout</a></li>
	           				 <?php } else{?>
							<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a></li>
							<?php }?>
						</ul>

					</div>

				</div>

			</div>

			

			<header id="header2" class="header4 header-yellow">

				<nav class="navbar navbar-default">

					<div class="container-fluid">

						<!-- Brand and toggle get grouped for better mobile display --

						<div class="navbar-header">

							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

								<span class="sr-only">Toggle navigation</span>

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

								<span class="icon-bar"></span>

							</button>

						</div>



						<!-- Collect the nav links, forms, and other content for toggling --

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav">

								<li><a href="<?php echo base_url();?>">home</a>
								</li>

								<li><a href="<?php echo base_url();?>index.php/ras/about">About Us</a></li>

								<li><a href="<?php echo base_url();?>index.php/ras/courses">courses</a></li>

								<li><a href="<?php echo base_url();?>index.php/ras/results">Results</a></li>

								<li class="active"><a href="<?php echo base_url();?>index.php/ras/student">student zone</a></li> 

								<li class="last"><a href="<?php echo base_url();?>index.php/ras/contact">contact</a>

								</li>

							</ul>

						</div><!-- /.navbar-collapse -->

					</div><!-- /.container-fluid --

				</nav>

				

				<div class="tel home layer"><i class="fa fa-phone" aria-hidden="true"></i><a href="#">(+91) 79031 35200</a></div>

				

			</header>
	<--heade-->


	<div id="wrapper">
		<div class="top-bar2">
			<div class="container">
				<ul class="social-icons">
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				</ul>
				

				
				<div class="right-panel">
					<a class="mail" href="mailto:info@discipline.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@discipline.com</a>
					<a class="tel" href="tel:+011234567896"><i class="fa fa-phone" aria-hidden="true"></i>(+01) 123 456 7896</a>
					
				</div>
				
			</div>
		</div>
		
		<header id="header2">
			<div class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>media/images/logonw.png" width="130" height="70" alt="descipline"></a></div>
			
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">

								<li><a href="<?php echo base_url();?>">home</a>
								</li>

								<li><a href="<?php echo base_url();?>index.php/ras/about">About Us</a></li>

								<li><a href="<?php echo base_url();?>index.php/ras/courses">courses</a></li>

								<li><a href="<?php echo base_url();?>index.php/ras/results">Results</a></li>

								<li ><a href="<?php echo base_url();?>index.php/ras/student">student zone</a></li> 

								<li class="last"><a href="<?php echo base_url();?>index.php/ras/contact">contact</a>

								</li>

							</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			
			
			
		</header>


		

		