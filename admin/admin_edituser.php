<?php 
	require_once('phpscripts/config.php');

	$id = $_SESSION['user_id'];
	//echo $id;
	$tbl = "tbl_user";
	$col = "user_id";
	$popForm = getSingle($tbl, $col, $id);
	$found_user = mysqli_fetch_array($popForm, MYSQLI_ASSOC);
	


	if(isset($_POST['submit'])) {
		$fname = trim($_POST['fname']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$email = trim($_POST['email']);
		$result = editUser($id, $fname, $username, $password, $email);
		$message = $result;
		


	}

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
		<h2>Edit User</h2>
		<?php if(!empty($message)){echo $message;} ?>
		<form action="admin_edituser.php" method="post">
		<label class="formStyle">First Name:</label>
		<input type="text" name="fname" value="<?php echo $found_user['user_fname'];?>"><br><br>
		<label class="formStyle">Username:</label>
		<input type="text" name="username" value="<?php echo $found_user['user_name'];?>"><br><br>
		<label class="formStyle">Password:</label>
		<input type="text" name="password" value="<?php echo $found_user['user_pass'];?>"><br><br>
		<label class="formStyle">Email:</label>
		<input type="text" name="email" value="<?php echo $found_user['user_email'];?>"><br><br>
		<br><br>
		<input type ="submit" name="submit" value="Edit User" class="send">


		</form>
	</div>
</div>
</body>
</html>