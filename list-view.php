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
		<div class="span2">
			<img src="assets/img/a.jpg" alt="">
		</div>
		<div class="span6">
		  <h5>KIWI</h5>
		  <p> Kiwifruit or Chinese gooseberry is the name given to the edible berries of several species of woody vines in the genus Actinidia. The most common cultivar group of kiwifruit is oval, about the size of a large hen's egg.. </p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3><p><strong> RS 150/kg</strong></p></h3>
<br>
		<div class="btn-group">
		  <a href="index.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/b.jpg" alt="">
		</div>
		<div class="span6">
		  <h5>APPLES</h5>
		  <p> The apple tree is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus. </p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> <p><strong> RS 180 /kg</strong></p></h3>
<br>
		<div class="btn-group">
		  <a href="index.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/c.jpg" alt="">
		</div>
		<div class="span6">
		  <h5>LIME</h5>
		  <p> A lime is a hybrid citrus fruit, which is typically round, lime green, 3–6 centimetres in diameter, and containing acidic juice vesicles. </p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> <p><strong> RS 100/kg</strong></p></h3>
<br>
		<div class="btn-group">
		  <a href="index.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/d.jpg" alt="">
		</div>
		<div class="span6">
		  <h5>MANGOES</h5>
		  <p> Mangoes are juicy stone fruit from numerous species of tropical trees belonging to the flowering plant genus Mangifera, cultivated mostly for their edible fruit. The majority of these species are found in nature as wild mangoes. </p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h4>RS 100/kg</h4>
<br>
		<div class="btn-group">
		  <a href="index.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/e.jpg" alt="">
		</div>
		<div class="span6">
		  <h5>WATERMELON</h5>
		  <p> Watermelon is a scrambling and trailing vine originally from southern Africa. It is a large, sprawling annual plant with coarse, hairy pinnately-lobed leaves and white to yellow flowers. </p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		 <h4>  RS 50/kg</h4>
<br>
		<div class="btn-group">
		  <a href="index.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/f.jpg" alt="">
		</div>
		<div class="span6">
		  <h5>ORANGES</h5>
		  <p> The orange is the fruit of the citrus species Citrus × sinensis in the family Rutaceae. It is also called sweet orange, to distinguish it from the related Citrus × aurantium, referred to as bitter orange. </p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		 <h4>RS 70/kg</h4>
<br>
		<div class="btn-group">
		  <a href="index.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/g.jpg" alt="">
		</div>
		<div class="span6">
		  <h5>ALOEVERA</h5>
		  <p> Aloe vera is a plant species of the genus Aloe. It grows wild in tropical climates around the world and is cultivated for agricultural and medicinal uses. Aloe is also used for decorative purposes and grows successfully indoors as a potted plant. </p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3>Rs 50/kg</h3>
<br>
		<div class="btn-group">
		  <a href="index.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		 </div>
			</form>
		</div>
	</div>
	<hr class="soften">
	<div class="row-fluid">	  
		<div class="span2">
			<img src="assets/img/h.jpg" alt="">
		</div>
		<div class="span6">
		  <h5>CINNAMON</h5>
		  <p> Cinnamon is a spice obtained from the inner bark of several tree species from the genus Cinnamomum. Cinnamon is used in both sweet and savoury foods. The term "cinnamon" also refers to its mid-brown colour. </p>
		</div>
		<div class="span4 alignR">
		<form class="form-horizontal qtyFrm">
		<h3> Rs 70/kg</h3>
<br>
		<div class="btn-group">
		  <a href="index.php" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</a>
		 </div>
			</form>
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