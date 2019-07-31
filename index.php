<?php
include('login.php'); // Includes Login Script
include 'libs.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Fast Calculations</title>
</head>
<style>
.calcu i,#age i,.convert i,.matrix i{
	color: #333;
	margin-left: 5%;
	margin-top: 5%;
}
.calcu,.matrix,.convert,#age{
	background-color: #EEE;
	height: 111px;
	margin-top: 88px;
	cursor: pointer;
	border: 2px solid #777;
}
.calcu,.matrix,.convert,#age p{
	color: #555;
	line-height: 111px;
	font-size: 30px;
	font-weight: bold;
}
.container .footer{
	position: absolute;
	top: 700px;
}
@media(max-width: 1000px)
{
	.container .footer{		
		top: 1100px;
	}
}
.calcu:hover,.matrix:hover,.convert:hover,#age:hover{
    background-color: #999;
    transition: background-color 0.3s ease-in-out;
    transition: color 0.3s ease-in-out;
    border: 2px solid yellow;
}
.row a:hover{
	text-decoration: none;
}
.calcu,.matrix,.convert,#age{
	display: none;
}
.go{
	background-color: #888;
	font-size: 26px;
	color: #fff;
	line-height: 26px;
	width: 36px;
	padding-left: 9px;
	position: absolute;
	top: 988px;
	right: 22px;
	display: none;
	border: none;
}
@media(max-width: 600px){
	.row p,#age p{
		font-size: 16px;
	}
}
</style>
<body>

<div class="container">
	  <h4 id="demo"></h4>
</div>


<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<a href="calc.php" data-toggle="tooltip" title="آلة حاسبة">
				<div class="calcu">
					<p class="text-center">Calculator<i class="fa fa-calculator fa-2x"></i></p>
				</div>
			</a>
		</div>
		<div class="col-xs-12 col-md-6">
			<a href="matrix.php" data-toggle="tooltip" title="تحويل تاريخ لهجري او ميلادي">
				<div class="matrix">
					<p class="text-center">Convert date Higry & Miladi<i class="fa fa-moon-o fa-2x"></i></p>
				</div>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<a href="convert.php" data-toggle="tooltip" title="تحويل الوحدات مثل المتر والكيلومتر">
				<div class="convert">
					<p class="text-center">convert units<i class="fa fa-exchange fa-2x"></i></p>
				</div>
			</a>
		</div>
		<div class="col-xs-12 col-md-6">
			<a href="convert.php" data-toggle="tooltip" title="حساب العمر من خلال ادخال تاريخ الميلاد">
				<div id="age">
					<p class="text-center">Calculate age<i class="fa fa-calendar fa-2x"></i></p>
				</div>
			</a>
		</div>
	</div>
	<button class="go" onclick="go()">
		<i class="fa fa-angle-double-up"></i>
	</button>
</div>


<script>
var i = 0;
var txt = "My name is Mohamed Ragab and I'am interested in web design and development.";
var speed = 120;
function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
window.onload = typeWriter;
/*
**
*/
$(function(){
	$(".go").click(function(){
		$('html, body').animate({ scrollTop: 0 }, 800);
	});
	if($(window).width() >=900){
		$(".calcu,.matrix").delay(2000).fadeIn(1000);	
		$(".convert,#age").delay(2000).fadeIn(2000);
	}
	if($(window).width() <=900){
		$(window).scroll(function(){
			if($(window).scrollTop() > 10){
				$(".calcu,.matrix").delay(1000).fadeIn(1000);
				$(".convert,#age").delay(2000).fadeIn(1000);
			}
			if($(window).scrollTop() > 30){
				$(".go").fadeIn(1000);
			}
			if($(window).scrollTop() < 400){
				$(".go").css("display","none");	
			}
		});
	}
});
</script>


</body>
</html>
