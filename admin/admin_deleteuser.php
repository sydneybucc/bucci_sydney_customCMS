<?php 
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL); 
	require_once('phpscripts/config.php');
//	confirm_logged_in();
	$tbl = "tbl_user";
	$users = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
<link rel="stylesheet" href="css/foundation.css">
<link href="css/admin_main.css" rel="stylesheet" type="text/css" media="screen">
<title>CMS Portal Delete User</title>
</head>
<body>
<div class="expanded row">
	<div class="large-12 large-offset-5 columns topSpace">
		<h2>Delete User</h2>

		<?php
			while($row = mysqli_fetch_array($users)) {
				echo "{$row['user_fname']}<a href =\"phpscripts/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br>";
			}
		?>
	</div>
</div>
</body>
</html>