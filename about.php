<?php
include 'libs.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>about</title>
</head>
<style>
.container .footer{
	position: absolute;
	top: 1100px;
}
.container h3{
	line-height: 55px;
}
.row .col-xs-12{
	margin-top: 30px;
}
@media(max-width: 1000px){
	.row{
		margin-left: 15%;
	}
	.container .footer{
	top: 1700px;
	}

}
.row img{
	width: 422px;
	height: 277px;
	border: 1px solid #666;
}
@media(max-width: 700px){
	.row{
		margin-left: 7%;
	}
	.row img{
		width: 300px;
	}
	.container .footer{
		position: absolute;
		top:1800px;
	}
	h3{
		font-size: 16px;
	}
}

</style>
<body>
<div class="container">
	<img src="myimg2.jpg" class="img-circle">
	<h3>Name : Mohamed Ragab Tawfik</h3>
	<h3>Study : I study in the faculty of computer sceince and information systems at beni suef university.I'am interested in web design and development.Interested in study of HTML - CSS - Bootstrap - Javascript - jQuery - PHP</h3>
	<h2 class="text-center">My works</h2>
	<div class="row">
		<div class="col-xs-12 col-md-5 col-md-offset-1">
			<a href="http://mobiles.bitballoon.com"><img src="mobiles.jpg"></a>
			<a href="http://mobiles.bitballoon.com"><h4 class="text-center">mobiles.bitballon.com</h4></a>
		</div>
		<div class="col-xs-12 col-md-6 ">
			<a href="http://freeze-foods.bitballoon.com"><img src="freez.jpg"></a>
			<a href="http://freeze-foods.bitballoon.com"><h4 class="text-center">freeze-foods.bitballoon.com</h4></a>
		</div>
	</div>
</div>
</body>
</html>