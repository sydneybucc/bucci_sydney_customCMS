<?php
    // include('connect.php');

    // $tbl = $_POST['tbl'];
    // $col = $_POST['col'];
    // $id = $_POST['id'];
    // unset($_POST['tbl']);
    // unset($_POST['col']);
    // unset($_POST['id']);
    // unset($_POST['submit']);

    // //echo count($_POST);
    // $num = count($_POST);

    // $qstring = "UPDATE {$tbl} SET 
    // ";
    // $count=0;
    // foreach($_POST as $key => $value){
    //     $count++;
    //     if($count != $num){
    //         $qstring .= $key."='".$value."',";
    //     }else{
    //         $qstring .= $key."='".$value."' ";
    //     }
    // }
    // $qstring .= " WHERE {$col}={$id}";
    // //echo $qstring;
    // $updatequery = mysqli_query($link,$qstring);
    // if($updatequery){
    //     header('Location:../../index.php');
    // }else{
    //     echo "There was a problem updating this info.";
    // }

    // mysqli_close($link);

    function editMovie($id, $title, $desc, $cover, $trailer, $runtime, $release, $rating){
		include('connect.php');
		$updateString = "UPDATE tbl_movies SET  movie_title = '{$title}', movie_desc = '{$desc}', movie_cover = '{$cover}', movie_trailer = '{$trailer}', movie_runtime = '{$runtime}', movie_release = '{$release}', movie_rating = '{$rating}' WHERE movies_id = {$id}";
		//echo $updateString;
	

	$updatequery = mysqli_query ($link, $updateString);
	if($updatequery){
		redirect_to("admin_index.php");
	}else{
		$message = "There was a problem changing your info, please contact your web admin.";
		return message;
	}
	mysqli_close($link);
}


// function ($username, $password, $ip) {
//     require_once('connect.php');
//     $username = mysqli_real_escape_string($link,$username);
//     $password = mysqli_real_escape_string($link,$password);
//     $loginstring = "SELECT * FROM tbl_user WHERE user_name = '{$username}' AND user_pass = '{$password}'";

//     $user_set = mysqli_query($link, $loginstring);
//     if(mysqli_num_rows($user_set)){
//         $found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC);
//         $id = $found_user['user_id'];
//         $_SESSION['user_id'] = $id;
//         $_SESSION['user_name'] = $found_user['user_fname'];
//         if(mysqli_query($link, $loginstring)){
//             $updatestring = "UPDATE tbl_user SET user_ip = '$ip' WHERE user_id={$id}";
//             $updatequery = mysqli_query($link, $updatestring);
//             }
//         redirect_to("admin_index.php");
//     }else{
//         $message = "Username and or password is incorrect.<br>Please make sure to check capslock!!";
//         return $message;
//     }
//     mysqli_close($link);
// }

// is this the right step towards editing a movie?
?>