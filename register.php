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
				<a class="active" href="register.php"><span class="icon-edit"></span> Register </a> 
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
			  <li class=""><a href="list-view.php">List View</a></li>
			  <li class=""><a href="grid-view.php">Grid View</a></li>
			  <li class=""></li>
			  <li class=""></li>
			  <li class=""></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
</form>
			<ul class="nav pull-right">
			<li class="dropdown">
<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" placeholder="Password">
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
			<li style="border:0"> &nbsp;</li>
			<li> </li>
			<li style="border:0"> &nbsp;</li>
			<li> </li>
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration/Login </li>
    </ul>
    <h3>Login or Register</h3>
    <hr class="soft"/>
    <div class="well">
	<form class="form-horizontal" action="log.php" method="POST">
	  <h3>LOGIN</h3>
	  <div class="control-group">
	    <label class="control-label">E-Mail <sup>*</sup></label>
	    <div class="controls">
			  <input type="text" name="em" placeholder=" Email">
			</div>
		</div>
        <div class="control-group">
          <label class="control-label">Password <sup>*</sup></label>
          <div class="controls">
			  <input type="text" name="pw" placeholder=" Password">
			</div>
		</div>
<div class="control-group">
  <div class="controls">
		 <input type="submit" name="login" value="Login" class="shopBtn exclusive">
		</div>
	</div>
	</form>
</div>
	<div class="well">
	<form class="form-horizontal">
		<h3>Your Personal Details</h3>
		<div class="control-group">
		<label class="control-label">Title <sup>*</sup></label>
		<div class="controls">
		<select class="span1" name="days">
			<option value="">-</option>
			<option value="1">Mr.</option>
			<option value="2">Mrs</option>
			<option value="3">Miss</option>
		</select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLname" placeholder="Last Name">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="email" name="eml" placeholder="Email">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" name="pw" placeholder="Password">
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <select class="span1" name="days">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
                    <option value="8">8&nbsp;&nbsp;</option>
                    <option value="9">9&nbsp;&nbsp;</option>
                    <option value="10">10&nbsp;&nbsp;</option>
                    <option value="11">11&nbsp;&nbsp;</option>
                    <option value="12">12&nbsp;&nbsp;</option>
                    <option value="13">13&nbsp;&nbsp;</option>
                    <option value="14">14&nbsp;&nbsp;</option>
                    <option value="15">15&nbsp;&nbsp;</option>
                    <option value="16">16&nbsp;&nbsp;</option>
                    <option value="17">17&nbsp;&nbsp;</option>
                    <option value="18">18&nbsp;&nbsp;</option>
                    <option value="19">19&nbsp;&nbsp;</option>
                    <option value="20">20&nbsp;&nbsp;</option>
                    <option value="21">21&nbsp;&nbsp;</option>
                    <option value="22">22&nbsp;&nbsp;</option>
                    <option value="23">23&nbsp;&nbsp;</option>
                    <option value="24">24&nbsp;&nbsp;</option>
                    <option value="25">25&nbsp;&nbsp;</option>
                    <option value="26">26&nbsp;&nbsp;</option>
                    <option value="27">27&nbsp;&nbsp;</option>
                    <option value="28">28&nbsp;&nbsp;</option>
                    <option value="29">29&nbsp;&nbsp;</option>
                    <option value="30">30&nbsp;&nbsp;</option>
                    <option value="31">31&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="months">
				<option value="">-</option>
					<option value="1">January&nbsp;&nbsp;</option>
					<option value="2">February&nbsp;&nbsp;</option>
					<option value="3">March&nbsp;&nbsp;</option>
					<option value="4">April&nbsp;&nbsp;</option>
					<option value="5">May&nbsp;&nbsp;</option>
					<option value="6">June&nbsp;&nbsp;</option>
					<option value="7">July&nbsp;&nbsp;</option>
                    <option value="8">August&nbsp;&nbsp;</option>
                    <option value="9">Spetember&nbsp;&nbsp;</option>
                    <option value="10">October&nbsp;&nbsp;</option>
                    <option value="11">November&nbsp;&nbsp;</option>
                    <option value="12">December&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="year">
				<option value="">-</option>
					<option value="1">1990&nbsp;&nbsp;</option>
					<option value="2">1991&nbsp;&nbsp;</option>
					<option value="3">1992&nbsp;&nbsp;</option>
					<option value="4">1993&nbsp;&nbsp;</option>
					<option value="5">1994&nbsp;&nbsp;</option>
					<option value="6">1995&nbsp;&nbsp;</option>
					<option value="7">1996&nbsp;&nbsp;</option>
			</select>
		</div>
	  </div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="Register" class="exclusive shopBtn">
		</div>
	</div>
	</form>
</div>


</div>
</div>
<!-- 
Clients 
-->
<!--
Footer
--></div><!-- /container -->

<div class="copyright"> </div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>
