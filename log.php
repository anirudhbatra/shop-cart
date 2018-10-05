<!doctype html>
<html>
<head>
<?php
include("config.php")
?>
<meta charset="utf-8">
</head>
<body>
<?php
	//Start session
	session_start();
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return @mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['em']);
	$password = clean($_POST['pw']);
	
	//Create query
	$qry='SELECT * FROM customer_db WHERE Email="'.$_POST['em'].'" AND Password="'.$_POST['pw'].'"';
	$result=mysqli_query($conn,$qry);
	//while($row = @mysql_fetch_array($result))
//  {
//  $level=$row['position'];
//  }
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = @mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['user_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['position'];
			echo "Login successful";
			session_write_close();
			//if ($level="admin"){
			header("location: index.php");
			exit();
		}else {
			echo "Login unsuccessful. Please go back and sign up.";
			exit();
		}
	}else {
		die("No account found. Please go back and register.");
	}
?>
</body>
</html>