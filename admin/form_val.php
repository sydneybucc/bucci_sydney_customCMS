<?php 
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	$errors = array();
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
	$address = trim($_POST['address']);

	$required = array("name","phone","address");

	foreach($required as $require){
		$value = trim($_POST[$require]);
		if(!has_value($value)){
			$errors[$require] = ucfirst($require)." cannot be blank";
		}
	}

	$max_lengths = array("name" => 15, "phone" => 8);

	max_length($max_lengths);
		
	

}
?>


<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
	<link href="css/admin_main.css" rel="stylesheet" type="text/css" media="screen">
	<title>CMS Portal Login</title>
</head>
<body>
<div class="center">
	<h2>Form Validation</h2>
	<?php echo form_errors($errors);?>

	<!--XSS Attacks-->
	<?php
		$no_attack = "&\"'";
		//echo htmlspecialchars($no_attack, ENT_QUOTES, 'UTF-8')."<br>";
		$attack = "\x8F!!!";
		//echo htmlspecialchars($attack, ENT_QUOTES, 'UTF-8');
	?>
	<!--XSS Attacks-->

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post"><!--THIS IS REALLY IMPORTANT-->
		<label class="formStyle">Name:</label>
		<input type="text" name="name" value="">
		<br>
		<label class="formStyle">Phone:</label>
		<input type="text" name="phone" value="">
		<br>
		<label class="formStyle">Address:</label>
		<input type="text" name="address" value="">
		<br>
		<input type="submit" name="submit" value="Send" class="send">
	</form>
</div>
</body>
</html>