<?php
include('login_fun.php'); // Includes Login Script
include 'libs.php';

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
</head>
<body>
<div class="container" style="margin-left: 40%;width: 60%;">
	<div id="main">
		<h2 style="margin-bottom: 5%;">Login</h2>
		<div id="login">			
			<form action="" method="post" autocomplete="off">
			<label>UserName :</label>
			<input id="name" name="username" placeholder="username" type="text"><br><br>
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password"><br><br>
			<input name="submit" type="submit" value=" Login " class="btn btn-primary" style="margin-left: 15%;">
			<span><?php echo $error; ?></span>
			</form>
		</div>
	</div>
</div>
</body>
</html>
