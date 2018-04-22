<?php
    // ini_set('display_errors',1);
    // error_reporting(E_ALL);
    require_once('phpscripts/config.php');

    $tbl = "tbl_movies";
	$movies = getAll($tbl);
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
    <div class="large-12 large-offset-5 columns topSpace">
        <h2>Edit Movie</h2>
        <?php
            // echo single_edit('tbl_movies','movies_id',1);
            while($row = mysqli_fetch_array($movies)){
                echo "{$row['movies_title']}<a href =\"admin_editform.php?caller_id=editMovie&id={$row['movies_id']}\">Edit Movie</a><br>";
            }
        ?>
    </div>
</div>
</body>
</html>