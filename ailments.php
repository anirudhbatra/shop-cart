<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
	include("config.php");
	?>
    <meta charset="utf-8">
    <title>Software Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR"> <a href="index.php"> <span class="icon-home"></span> Home</a> 
				<a href="register.php"><span class="icon-edit"></span> Register </a> 
				<a href="cart.php"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> Rs 120</span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.php"><span>Software Project</span> 
		<img src="assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4"> </div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="index.php">Home	</a></li>
			  <li class="active"><a href="list-view.php">List View</a></li>
			  <li class=""><a href="grid-view.php">Grid View</a></li>
			  <li class=""></li>
			  <li class=""></li>
			  <li class=""></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
  </div>
<!-- 
Body Section 
-->
  <div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<li><a href="products.php"><span class="icon-chevron-right"></span>Products</a></li>
		<li><a href="register.php"><span class="icon-chevron-right"></span>Login</a></li>
		<li><a href="ailments.php"><span class="icon-chevron-right"></span>Ailment</a></li>
		
		<li style="border:0"> &nbsp;</li>
		<li> </li>
	</ul>
</div>
<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li> </li>
			
			<li> </li>
			<li style="border:0"> &nbsp;</li>
			<li> </li>
		  </ul>

	</div>
<div class="span9">
<div class="well well-small">
	<div class="row-fluid">	  
		<div class="span2"> </div>
		<div class="span6">
		  <h5>Common Cold</h5>
		  <p> The word “common” over here can suggest the frequency of this ailment which is a viral infectious disease and can be caused by over 200 viruses, rhinovirus being the primary source of them all. </p>
		</div>
</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2"> </div>
		<div class="span6">
		  <h5>Sore Throat</h5>
		  <p> A sore throat is referred to a pain or irritation in throat caused due to inflammation of throat. </p>
		</div>
</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2"> </div>
		<div class="span6">
		  <h5>Burning Stomach</h5>
		  <p> Eating too quickly or without chewing properly, lying down immediately after eating or simply from eating certain foods, one can have acidity. </p>
		</div>
</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2"> </div>
		<div class="span6">
		  <h5>Tooth Decay</h5>
		  <p> Tooth decay, also called Dental Carries or more commonly a cavity is an infection which is bacterial in origin. A cavity demineralises and destructs the hard tissue on the tooth surface. </p>
		</div>
</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2"> </div>
		<div class="span6">
		  <h5>Dandruff</h5>
		  <p> Dandruff is the shedding of dead skin cells that is visible as skin flakes. Shedding of skin layer is a normal process but in some cases it becomes a disturbing situation where the skin cells mature and fall off in 2-7 days unlike a month for people with a healthy scalp. </p>
		</div>
</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2"> </div>
		<div class="span6">
		  <h5>Eczema</h5>
		  <p> Eczema is a common skin disease which involves chronic inflammation of the skin. The visible symptoms for it are redness, itchiness or dryness, crusting, flaking, cracking or blistering of skin. </p>
		</div>
</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2"> </div>
		<div class="span6">
		  <h5>Depression</h5>
		  <p> Mental or psychological issues which were considered to be taboo a decade ago are becoming more common in this modern era. Depression is the most heard of psychological problem these days. </p>
		</div>
</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2"> </div>
		<div class="span6">
		  <h5>Asthma</h5>
		  <p> Asthma is a chronic inflammatory disease which influences our respiratory system severely. Coughing, wheezing, chest tightness and shortness of breath are some of its common symptoms. </p>
		</div>
</div>
	<hr class="soften">
<hr class="soften">
<hr class="soften">
</div>
</div>
</div>
<!-- 
Clients 
-->
<!--
Footer
-->
</div><!-- /container -->
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>