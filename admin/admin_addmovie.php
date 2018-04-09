<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once('phpscripts/config.php');
    $tbl="tbl_genre";
    $genQuery = getAll($tbl);

	if(isset($_POST['submit'])) {
		$title = trim($_POST['title']);
		$cover = $_FILES['cover'];
		$year = trim($_POST['year']);
		$runtime = trim($_POST['runtime']);
		$storyline = trim($_POST['storyline']);
		$trailer = trim($_POST['trailer']);
		$release = trim($_POST['release']);
		$genre = $_POST['genList'];
		$uploadMovie = addMovie($title, $cover, $year, $runtime, $storyline, $trailer, $release, $genre);
		$message = $uploadMovie;
	

		}


	
    
?>

<doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
<link href="css/admin_main.css" rel="stylesheet" type="text/css" media="screen">
<title>CMS Portal</title>
</head>
<body>
<div class="center">
    <h2>Add Movie</h2>
    <?php if (!empty($message)){echo $message;} ?>
    <form action="admin_addMovie.php" method="post" enctype="multipart/form-data">
        <label class="formStyle">Movie Title:</label>
        <input type="text" value="" name="title" value=""><br><br>
        <label class="formStyle">Movie Cover Image:</label>
        <input type="file" value="" name="cover" value=""><br><br>
        <label class="formStyle">Movie Year:</label>
        <input type="text" value="" name="year" value=""><br><br>
        <label class="formStyle">Movie Runtime:</label>
        <input type="text" value="" name="runtime" value=""><br><br>
        <label class="formStyle">Movie Storyline:</label>
        <input type="text" value="" name="storyline" value=""><br><br>
        <label class="formStyle">Movie Trailer:</label>
        <input type="text" value="" name="trailer" value=""><br><br>
        <label class="formStyle">Movie Release:</label>
        <input type="text" value="" name="release" value=""><br><br>
        <select class="formStyle" name="genList">
        	<option value="">Please Select a Genre</option>
        <?php while($row= mysqli_fetch_array($genQuery)){
        	echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
        	}

?>
    
        <input type="submit" name="submit" value="Add Movie" class="send">
    </form>
</div>
</body>
<html>