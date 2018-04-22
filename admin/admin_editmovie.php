<?php
	require_once('admin/phpscripts/config.php');
	if(isset($_GET['id'])){
		$id= $_GET['id'];
		$tbl = "tbl_movies";
		$col = "movies_id";
		$getSingle = getSingle($tbl, $col, $id);
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<title>Edit Details</title>
</head>
<body>	
	<?php
	if(!is_string($getSingle)) {
		$row = mysqli_fetch_array($getSingle);
		echo "<img src=\"images/{$row['movies_cover']}\"alt=\"{$row['movies_title']}\">
		<h2>{$row['movies_title']}</h2>
		<p>{$row['movies_release']}</p>
		<p>{$row['movies_desc']}</p>
		<a href=\"index.php\">Back...</a>

		";
	}else{
		echo "<p class=\"error\">{$getSingle}</p>";
	}

	?>
</body>
</html>