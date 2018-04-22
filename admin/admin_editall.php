<?php
    // ini_set('display_errors',1);
    // error_reporting(E_ALL);
    require_once('phpscripts/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Anton|Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/foundation.css">
    <link href="css/admin_main.css" rel="stylesheet" type="text/css" media="screen">
    <title>Edit All</title>
</head>
<body>
<div class="expanded row">
    <div class="large-6 large-offset-3 columns topSpace">
        <h2>Edit Movie</h2>
        <?php
            // echo single_edit('tbl_movies','movies_id',1);
        ?>
        
        
        
        <?php if(!empty($message)){echo $message;} ?>
		<form action="admin_editall.php" method="post">
		<label class="formStyle">Title:</label>
		<input type="text" name="title" value="<?php echo $found_user['movies_title'];?>"><br><br>
		<label class="formStyle">Description</label>
		<input type="text" name="desc" value="<?php echo $found_user['movies_desc'];?>"><br><br>
		<label class="formStyle">Cover:</label>
		<input type="text" name="cover" value="<?php echo $found_user['movies_cover'];?>"><br><br>
		<label class="formStyle">Trailer:</label>
        <input type="text" name="trailer" value="<?php echo $found_user['movies_trailer'];?>"><br><br>
        <label class="formStyle">Runtime:</label>
        <input type="text" name="runtime" value="<?php echo $found_user['movies_runtime'];?>"><br><br>
        <label class="formStyle">Release:</label>
        <input type="text" name="release" value="<?php echo $found_user['movies_release'];?>"><br><br>
        <label class="formStyle">Rating:</label>
		<input type="text" name="rating" value="<?php echo $found_user['movies_rating'];?>"><br><br>
		<br><br>
        <input type ="submit" name="submit" value="Edit User" class="send">
        


		</form>
    </div>
</div>
</body>
</html>