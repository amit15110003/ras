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
<link id="style" rel="stylesheet" href="<?php echo base_url();?>media/css/style1.css">
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
    <div id="wrapper ">
		

			<header id="header" style="display: block;z-index: 10000; background-color: #efefef;">
			<div class="logo" ><a href="<?php echo base_url();?>" ><img src="<?php echo base_url();?>media/images/logg.png"  style="padding-bottom: 40px; width: 150px; height:75px;" ></a></div>
			<nav id="nav">
				<div class="containerr">
					<div class="row nav-holder">
						<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header" style="display: block;z-index: 10000;">
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


								<li><a href="">student zone</a>

									<ul class="drop-down d-7">

										<li><a href="<?php echo base_url();?>index.php/profile">student zone</a></li>

										<li><a href="<?php echo base_url();?>index.php/ras/results">Results</a></li>

										<li><a href="<?php echo base_url();?>index.php/questions">Ask Questions</a></li>

									</ul>

								</li>
								

								<li class="last"><a href="<?php echo base_url();?>index.php/ras/blog">Blog</a></li>

								<li class="last"><a href="<?php echo base_url();?>index.php/ras/contact">contact</a></li>


								<li class="login-list">
								
									<?php if ($this->session->userdata('u_card')){ ?>
									<li><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i><?php echo $result = substr($this->session->userdata('u_name'), 0, 6); ?></a></li>

									<li><a href="<?php echo base_url();?>index.php/ras/logout" ><i class="fa fa-sign-in" aria-hidden="true"></i>logout</a></li>
			           				 <?php } else{?>
									<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-sign-in" aria-hidden="true"></i>login</a></li>
									<?php }?>
									


								</li>

							</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
					</div>
				</div>
			</nav>
		</header>


		

		