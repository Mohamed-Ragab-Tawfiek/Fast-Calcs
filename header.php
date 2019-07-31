<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse" style="border-radius: 0;font-size: 17px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="home.php" data-toggle="tooltip" title="الحسابات السريعة" style="font-size: 25px;font-weight: bold">Fast Calculations</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php" data-toggle="tooltip" title="الرئيسية">Home</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-toggle="tooltip" title="خدمات">Services
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="calc.php" data-toggle="tooltip" title="آلة حاسبة">calculator</a></li>
          <li><a href="matrix.php" data-toggle="tooltip" title="تحويل تاريخ لهجري او ميلادي">Higri-Milady conversion</a></li>
          <li><a href="age.php" data-toggle="tooltip" title="حساب العمر من خلال ادخال تاريخ الميلاد">age calculator</a></li>
          <li><a href="convert.php" data-toggle="tooltip" title="تحويل الوحدات مثل المتر والكيلومتر">convert units</a></li>
        </ul>
      </li>

        <li><a href="contact.php" data-toggle="tooltip" title="تواصل معنا">Contact</a></li>
        <li><a href="about.php" data-toggle="tooltip" title="معلومات عني">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="sign.php" data-toggle="tooltip" title="التسجيل"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php" data-toggle="tooltip" title="الدخول"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
