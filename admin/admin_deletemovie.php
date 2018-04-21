<?php 
	//ini_set('display_errors', 1);
	//error_reporting(E_ALL); 
	require_once('phpscripts/config.php');
//	confirm_logged_in();
	$tbl = "tbl_movies";
	$movies = getAll($tbl);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
<link href="css/admin_main.css" rel="stylesheet" type="text/css" media="screen">
<title>CMS Portal Delete Movie</title>
</head>
<body>
<div class="center">
	<h1>Delete Movie</h1>

	<?php
		while($row = mysqli_fetch_array($movies)) {
			echo "{$row['movies_title']}<a href =\"phpscripts/caller.php?caller_id=deleteMovie&id={$row['movies_id']}\">Delete Movie</a><br>";
		}
	?>
</div>
</body>
</html>