<?php

function  editMovie($id, $title, $desc, $cover, $trailer, $runtime, $release, $rating){
    include('connect.php');
    $updateMovieString = "UPDATE tbl_movies SET  movies_title = '{$title}', movies_desc = '{$desc}', movies_cover = '{$cover['name']}', movies_trailer = '{$trailer}', movies_runtime = '{$runtime}', movies_release = '{$release}', movies_rating = '{$rating}' WHERE movies_id = {$id}";
    //echo $updatemovieString;


$updatequery = mysqli_query ($link, $updateMovieString);
if($updatequery){
    redirect_to("admin_index.php");
}else{
    $message = "There was a problem changing your info, please contact your web admin.";
    return message;
}
mysqli_close($link);
}

?>