<?php
include 'libs.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fast</title>
</head>
<style>
.container .kilo-m{
	margin-top: 10%;
	margin-left: 40%;
}
.kilo-m button{	
	font-size: 22px;
}
.kilo-m input{
	width: 60%;
	font-size: 22px;
}
.kilo-m select{
	font-size: 22px;
}
#ans_conv{
	margin-left: 33%;
	margin-top: 2%;
	font-size: 150%;
	background-color: #ddd;
	width: 233px;
	padding-left: 10px;
	padding-right: 10px;
	height: 35px;
	text-align: center;
	display: none;
}
@media(max-width: 728px){
	.container .kilo-m{
		margin-left: 0%;
	}
	select,.kilo-m input{
		width: 100%;
	}
	.kilo-m select{
		text-indent: 30%;
		width: 100%;
	}
	.kilo-m button{
		margin-top: 5%;
		margin-left: 40%;
	}
}
</style>

<body>
<div class="container">
	<h3 class="text-center" style="font-weight: bold">Convert meters to kilometers..</h3>
	<div class="kilo-m">
		<select id="list" style="margin-bottom: 5%;">
		<option value="1">meter to kilometer</option>
		<option value="2">kilometer to meter</option>
		</select><br><br>
		<input type="text" id="unit" placeholder="enter a number" autocomplete="off" data-toggle="tooltip" title="ادخل رقم لتحوله من الكيلومتر للمتر او العكس">
		<button  value="convert" class="btn btn-primary" onclick="convert()">convert</button>
		<div id="ans_conv">
			
		</div>
	</div>
</div>

<script>
function convert()
{
	var list = document.getElementById("list").value;
	var unit = document.getElementById("unit").value;
	if(list==1)
	{
		document.getElementById("ans_conv").style.display = 'block';
		document.getElementById("ans_conv").innerHTML = (unit)/1000;
	}
	if(list==2)
	{
		document.getElementById("ans_conv").style.display = 'block';
		document.getElementById("ans_conv").innerHTML = (unit)*1000;	
	}
	if(unit=='')
	{
		document.getElementById("ans_conv").innerHTML = 'enter a number'	;
	}
}	
</script>

</body>
</html>
