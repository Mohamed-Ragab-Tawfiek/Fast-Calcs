<?php
include 'libs.php';
?>

<style>
.container{
	width: 40%;
}
.rslt{
	background-color: #eee;
	width: 99px;
	height: 33px;
	margin-top: 10px;
	text-align: center;
	line-height: 33px;
	font-size: 26px;
}
.container input{
	font-size: 22px;
}
.container .rslt{
	display: none;
}
@media(max-width: 728px){
	.container{
		margin-left: 15%;
		margin-top: 10%;
	}
	h3{
		font-size: 18px;
		width: 150%;
	}
	input{
		width: 185%;
	}
}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Age</title>
</head>
<body>
<div class="container">
	<h3>enter your birthdate as <strong>(year-month-day)</strong></h3>
	<input type="text" id="birthday" placeholder="yyyy-mm-dd" autocomplete="off" data-toggle="tooltip" title="ادخل تاريخ ميلادك لحساب عمرك"><br><br>
	<input type="button" id="btn" value="calculate age" class="btn btn-primary">
	<div class="rslt">
	
	</div>
</div>
</body>
</html>

<script>
var calculateAge = function(birthday) 
{
var now = new Date();
var past = new Date(birthday);
var nowYear = now.getFullYear();
var pastYear = past.getFullYear();
var age = nowYear - pastYear;
return age;
};

$('#btn').click(function(e){
    $('.container .rslt').css("display","block");
    e.preventDefault();
    var $birthday = $('#birthday').val();
    $(".rslt").text(calculateAge($birthday));
});
</script>