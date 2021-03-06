<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
	include("config.php");
	?>
    <meta charset="utf-8">
    <title>Fruits and Herbs</title>
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
			<div class="alignR">
				<div class="pull-left socialNw">
					
				</div>
				<a> Home</a> <a link href="register.php"> Register </a> <a> 2 Item(s) -  Rs 120</a></div>
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
	<a class="logo" href="index.php"><span>Fruits and Herbs</span> 
		<img src="assets/img/logo-bootstrap-shoping-cart.PNG" alt="">
	</a>
	</h1>
	</div>
	
	
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
			  <li class="active"><a href="index.php">Home	</a></li>
			  <li class=""><a href="list-view.php">List View</a></li>
			  <li class=""><a href="grid-view.php">Grid View</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
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
	<div class="span9">
<!-- 
New Products
-->

	<div class="well well-small">
	<h3>Our Products </h3>
		<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="index.php" class="overlay"></a>
				<a href="index.php"><img src="assets/img/a.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Kiwi</p>
				<p><strong> RS 150/kg</strong></p>

					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="index.php" class="overlay"></a>
				<a href="index.php"><img src="assets/img/b.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Apples</p>
					 <p><strong> RS 180 /kg</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="index.php" class="overlay"></a>
				<a href="index.php"><img src="assets/img/c.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Lime</p>
					<p><strong> Rs.49.00/kg</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
			
	<div class="row-fluid">
		  <ul class="thumbnails">
			<li class="span4">
			  <div class="thumbnail">
				<a href="index.php" class="overlay"></a>
				<a href="index.php"><img src="assets/img/f.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Oranges</p>
					 <h4>RS 70/kg</h4>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="index.php" class="overlay"></a>
				<a href="index.php"><img src="assets/img/e.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Watermelon</p>
					 <h4>  RS 50/kg</h4>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="index.php" class="overlay"></a>
				<a href="index.php"><img src="assets/img/g.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Aloevera</p>
					<p><strong> Rs 50/kg</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			<li class="span4">
			  <div class="thumbnail">
				<a href="index.php" class="overlay"></a>
				<a href="index.php"><img src="assets/img/h.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Cinnamon</p>
					<p><strong> Rs 70/kg</strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			
			<li class="span4">
			  <div class="thumbnail">
				<a href="index.php" class="overlay"></a>
				<a href="index.php"><img src="assets/img/d.jpg" alt=""></a>
				<div class="caption cntr">
					<p>Mangoes</p>
					<h4>RS 100/kg</h4>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
	
	</div>
	</div>
	</div>
<!-- 
Clients 
-->

<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
 </div>
 </div>
</footer>
<!-- /container -->

<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>
