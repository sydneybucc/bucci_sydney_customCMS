<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once('phpscripts/config.php');


$id = $_GET['id'];

if(isset($_POST['submit'])) {
    $title = trim($_POST['title']);
    $desc = trim($_POST['desc']);
    $cover = $_POST['cover'];
    // I couldn't get the images to appear correctly when editing the movie. They seem to upload fine when creating a movie however. 
    $trailer = trim($_POST['trailer']);
    $runtime = trim($_POST['runtime']);
    $release = trim($_POST['release']);
    $rating = trim($_POST['rating']);
    $result = editMovie($id, $title, $desc, $cover, $trailer, $runtime, $release, $rating);
    $message = $result;
}

$tbl = "tbl_movies";
$col = "movies_id";
$movieEditForm = getSingle($tbl, $col, $id);
$found_movie = mysqli_fetch_array($movieEditForm, MYSQLI_ASSOC);


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
        <h2>Edit Movie</h2>
        <?php if(!empty($message)){echo $message;} ?>
        <form action="admin_editform.php?id=<?php echo $id ?>" method="post">
        <label class="formStyle">Title:</label>
        <input type="text" name="title" value="<?php echo $found_movie['movies_title'];?>"><br><br>
        <label class="formStyle">Description:</label>
        <input type="text" name="desc" value="<?php echo $found_movie['movies_desc'];?>"><br><br>
        <label class="formStyle">Cover Image:</label>
        <input type="file" name="cover" value="<?php echo $found_movie['movies_cover'];?>"><br><br>
        <label class="formStyle">Trailer:</label>
        <input type="text" name="trailer" value="<?php echo $found_movie['movies_trailer'];?>"><br><br>
        <label class="formStyle">Runtime:</label>
        <input type="text" name="runtime" value="<?php echo $found_movie['movies_runtime'];?>"><br><br>
        <label class="formStyle">Release:</label>
        <input type="text" name="release" value="<?php echo $found_movie['movies_release'];?>"><br><br>
        <label class="formStyle">Rating:</label>
        <input type="text" name="rating" value="<?php echo $found_movie['movies_rating'];?>"><br><br>
        <br><br>
        <input type ="submit" name="submit" value="Edit User" class="send">


        </form>
    </div>
</div>
</body>
</html>