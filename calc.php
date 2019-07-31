<?php
include 'libs.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>

<style>
form{
margin-left: 33%;
background-color: #ddd;
width: 32.6%;
height: 269px;

}
table{
	width: 100%;
	height: 266px;
	background-color: #eee;
}
input{
	background-color: #ddd;
	width: 88px;
	margin-left: 1px;
	border: 1px solid #333;
	height: 39px;
	font-size: 22px;
	margin-top: 3px;
}
@media(max-width: 828px){
	form{
			margin-top: 10%;
			background-color: #333;
			width: 282px;
			height: 266px;
			margin-left: 14%;
	}
	table{
		width: 100%;
		height: 266px;
		background-color: #eee;
	}
	input{
		background-color: #ddd;
		width: 66px;
		margin-left: 1px;
		border: 1px solid #333;
		height: 39px;
		font-size: 22px;
		margin-top: 3px;
	}

}
</style>

<body>

<div class="container">

	<FORM NAME="Calc">
		<TABLE BORDER="1" align="center">
			<TR>
			<td style="height: 11px;">
			<INPUT TYPE="text" NAME="Input" disabled="disabled" Size="16" style="margin-top:1px;margin-left:1px;border:1px solid #333;font-size:25px;font-weight:bold;width: 99.5%;">
			</td>
			</TR>
			<TR>
			<TD>
			<INPUT TYPE="button" NAME="one"   VALUE="  1  " OnClick="Calc.Input.value += '1'">
			<INPUT TYPE="button" NAME="two"   VALUE="  2  " OnCLick="Calc.Input.value += '2'">
			<INPUT TYPE="button" NAME="three" VALUE="  3  " OnClick="Calc.Input.value += '3'">
			<INPUT TYPE="button" NAME="plus"  VALUE="  +  " OnClick="Calc.Input.value += ' + '">

			<INPUT TYPE="button" NAME="four"  VALUE="  4  " OnClick="Calc.Input.value += '4'">
			<INPUT TYPE="button" NAME="five"  VALUE="  5  " OnCLick="Calc.Input.value += '5'">
			<INPUT TYPE="button" NAME="six"   VALUE="  6  " OnClick="Calc.Input.value += '6'">
			<INPUT TYPE="button" NAME="minus" VALUE="  -  " OnClick="Calc.Input.value += ' - '">

			<INPUT TYPE="button" NAME="seven" VALUE="  7  " OnClick="Calc.Input.value += '7'">
			<INPUT TYPE="button" NAME="eight" VALUE="  8  " OnCLick="Calc.Input.value += '8'">
			<INPUT TYPE="button" NAME="nine"  VALUE="  9  " OnClick="Calc.Input.value += '9'">
			<INPUT TYPE="button" NAME="times" VALUE="  x  " OnClick="Calc.Input.value += ' * '">

			<INPUT TYPE="button" NAME="clear" VALUE="  c  " OnClick="Calc.Input.value = ''">
			<INPUT TYPE="button" NAME="zero"  VALUE="  0  " OnClick="Calc.Input.value += '0'">
			<INPUT TYPE="button" NAME="DoIt"  VALUE="  =  " OnClick="Calc.Input.value = eval(Calc.Input.value)">
			<INPUT TYPE="button" NAME="div"   VALUE="  /  " OnClick="Calc.Input.value += ' / '">

			</TD>
			</TR>
		</TABLE>
	</FORM>

</div>
</body>
</html>