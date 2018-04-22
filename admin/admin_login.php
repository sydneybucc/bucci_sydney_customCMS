<?php 
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');

	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	if($username !== "" && $password !== "") {
		
		$result = login($username, $password, $ip);
		$message = $result;
	}else{
		$message = "Please fill in the required fields";
		
	}
}
?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
	<link rel="stylesheet" href="css/foundation.css">
	<link href="css/admin_main.css" rel="stylesheet" type="text/css" media="screen">
	<title>CMS Portal Login</title>
</head>
<body>
<div class="expanded row">
	<div class="large-6 large-offset-3 columns topSpace">
		<h2>Welcome! Sign in to continue</h2>
		<?php if(!empty($message)){echo $message;}?>
		<form action="admin_login.php" method="post">
			<label id="username">Username:</label>
			<input type="text" name="username" value="">
			<br>
			<label id="password">Password:</label>
			<input type="text" name="password" value="">
			<br>
			<input type="submit" name="submit" value="Sign In" class="send">
		</form>
	</div>
</div>
</body>
</html>