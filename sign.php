<?php
include "libs.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container-fluid">
<h2 class="text-center">Sign Up</h2>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-xs-12">
			<form action="" method="POST" autocomplete="off">
			  <div class="form-group">
			    <label>FullName</label>
			    <input type="text" class="form-control" name="fname" autocomplete="off" required="required">
			  </div>
			  <div class="form-group">
			    <label>Password</label>
			    <input type="password" class="form-control" name="pass" autocomplete="off" required="required"><br>
			  	<button type="submit" class="btn btn-primary" name="sign">Sign Up</button>
			  </div>
			</form>
			<div class="thanks" style="font-size: 22px;display: none;">
			Thanks
			</div>
		</div>
	</div>
</div>

<script>
$("button").click(function(){
	$(".thanks").fadeIn(3000);
});

</script>
</body>
</html>

<?php
if(isset($_POST['sign']))
{
	$fname=$_POST['fname'];
	$pass=$_POST['pass'];
	$con=new mysqli('sql311.epizy.com','epiz_21440614','','epiz_21440614_company');
	if($con->connect_error)
	{
		die("fail to connect to database".$con->connect_error);
	}
	$query="insert into login(username,password) values('$fname','$pass')";
	if($con->query($query)===true)
	{		
		
	}
	else
	{
		echo "fail to sign up".$con->error;
	}
	$con->close();
}

?>