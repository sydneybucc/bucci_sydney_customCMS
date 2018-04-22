<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    require_once('phpscripts/config.php');
    $tbl="tbl_genre";
    $genQuery = getAll($tbl);

	if(isset($_POST['submit'])) {
        $title = trim($_POST['title']);
        $desc = trim($_POST['desc']);
        $cover = $_FILES['cover'];
        $trailer = trim($_POST['trailer']);
		$runtime = trim($_POST['runtime']);
        $release = trim($_POST['release']);
        $rating = trim($_POST['rating']);
		$genre = $_POST['genList'];
		$uploadMovie = addMovie($title, $desc, $cover, $trailer, $runtime, $release, $rating, $genre);
        $message = $uploadMovie;
	

		}


	
    
?>

<doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
<link rel="stylesheet" href="css/foundation.css">
<link href="css/admin_main.css" rel="stylesheet" type="text/css" media="screen">
<title>CMS Portal</title>
</head>
<body>
<div class="expanded row">
    <div class="large-6 large-offset-3 columns topSpace">
        <h2>Add Movie</h2>
        <?php if (!empty($message)){echo $message;} ?>
        <form action="admin_addMovie.php" method="post" enctype="multipart/form-data">
            <label class="formStyle">Movie Title:</label>
            <input type="text" value="" name="title" value=""><br><br>
            <label class="formStyle">Movie Description:</label>
            <input type="text" value="" name="desc" value=""><br><br>
            <label class="formStyle">Movie Cover Image:</label>
            <input type="file" value="" name="cover" value=""><br><br>
            <label class="formStyle">Movie Trailer:</label>
            <input type="text" value="" name="trailer" value=""><br><br>
            <label class="formStyle">Movie Runtime:</label>
            <input type="text" value="" name="runtime" value=""><br><br>
            <label class="formStyle">Movie Release:</label>
            <input type="text" value="" name="release" value=""><br><br>
            <label class="formStyle">Movie Rating:</label>
            <input type="text" value="" name="rating" value=""><br><br>
            <select class="formStyle" name="genList">
                <option value="">Please Select a Genre</option>
            <?php while($row= mysqli_fetch_array($genQuery)){
                echo "<option value=\"{$row['genre_id']}\">{$row['genre_name']}</option>";
                }?>
            <input type="submit" name="submit" value="Add Movie" class="send">
        </form>
    </div>
</div>
</body>
<html>