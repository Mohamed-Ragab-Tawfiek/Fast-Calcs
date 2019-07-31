<?php
include('session.php');
include('libs.php');

?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
</head>
<body>
<div class="container">
	<div id="profile">
	<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b><br><br>
	<a href="logout.php" style="color: #fff"><button id="logout" class="btn btn-primary" data-toggle="tooltip" title="تسجيل خروج">Log Out</button></a>
	</div>
</div>
</body>
</html>
