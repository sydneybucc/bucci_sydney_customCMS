<?php 
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL); 
	require_once('phpscripts/config.php');
	// confirm_logged_in();
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
	<h1 class="hidden">Welcome to your admin page!</h1>
<div class="expanded row">
	<div class="large-12 large-offset-3 columns topSpace">
		<?php echo "<h2>Hello!</h2>" ?>
		<a href ="admin_createuser.php">Create User</a>
		<a href ="admin_edituser.php">Edit User</a>
		<a href ="admin_deleteuser.php">Delete User</a>
		<a href ="admin_addmovie.php">Add Movie</a>
		<a href ="admin_deletemovie.php">Delete Movie</a>
		<a href ="admin_editall.php">Edit Movies</a>
		<a href ="phpscripts/caller.php?caller_id=logout">Sign Out</a>
	</div>
</div>
</body>
</html>