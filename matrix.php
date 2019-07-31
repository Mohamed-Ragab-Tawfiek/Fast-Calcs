<?php
include 'libs.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Higry and Miladi</title>
</head>

<style>
#mat{
	font-size: 22px;
	width: 166px;
	margin-left: 40%;
	text-align: center;
}
.two input{
	width: 10%;
}
select{
	font-size: 20px;
	margin-left: 38%;
}
.container input{
	margin-left: 38%;
	margin-top: 5%;
}
@media(max-width: 728px){
	.container input,select,#mat{
		margin-left: 10%;
		width: 85%;
	}
	.container button{
		margin-top: 30px;
		margin-left: 40%;
	}
	.container{
		margin-top: 10%;
	}
	select{
		text-indent: 40%;
	}
}
</style>
<body>

<div class="container">
	<h3 class="text-center">select the conversion</h3>
	<select id="calen">
		<option value="1">Higri to Miladi</option>
		<option value="2">Miladi to Higri</option>
	</select>
</div>
<div class="container">
	<input type="number" placeholder="enter a year" id="year" data-toggle="tooltip" title="ادخل سنة لتحولها للتاريخ الهجري او العكس">
	<button class="btn btn-primary" onclick="conv()">Convert</button>
</div>
<div class="container">
	<input type="text" id="rslt" value="0">
</div>
<script>
function conv()
{
	var calen = document.getElementById('calen').value;
	var rslt = document.getElementById('rslt');
	var year = document.getElementById('year').value;
	if(calen==1)
	{
		var x = Math.floor(parseFloat(year) + (623) -(parseFloat(year)/33));
		rslt.value = x;
	}
	if(calen==2)
	{
		var y = Math.round((year - 622) / 0.97);
		rslt.value = y;
	}
}
</script>
</body>
</html>