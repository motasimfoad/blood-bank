<?php 
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>

<!--Bootstrap -->
<!-- Latest compiled and minified CSS -->

 <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<!-- End of Bootstrap -->


<!-- MDL -->
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
<!-- End of MDL -->

<link rel="stylesheet" type="text/css" href="style.css">

  <title>Blood Bank</title>
</head>
<body>




<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Blood Bank</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="login.php">Login</a>
        <a class="mdl-navigation__link" href="donate.php">Donate</a>
       
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Blood Bank</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="login.php">Login</a>
      <a class="mdl-navigation__link" href="donate.php">Donate</a>
       <a class="mdl-navigation__link" href="index.php">Home</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">

<?php
if (isset($_POST['register'])) {
	session_start();
  $ip=$_SERVER['REMOTE_ADDR'];
$un = $_POST['un'];
$fn = $_POST['fn'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$location = $_POST['location'];
$bg = $_POST['bg'];
$pon = $_POST['pon'];
$donate = $_POST['donate'];
$phone = $_POST['phone'];
$sql = 
"INSERT INTO user (un, fn, email, pass, age, sex, loc, bg, pon, donate, phone,ip) Values('$un', '$fn', '$email', '$pass', '$age', '$sex', '$location', '$bg', '$pon', '$donate', '$phone','$ip')";
	if ($conn->query($sql)===true) {
		echo "<p align=center style=background-color:#63F786>Successful Registration :)</p>";
	}else{
		echo "Error: " . $conn->error;
	}
// echo "$un, $fn, $email, $pass, $age, $sex, $location, $bg, $pon, $donate, $phone";

}
?>

<div id="container" align="center">
<div class="panel panel-danger">
  <div class="panel-body">Registration Area</div>
</div>
<form role="form" name="reg" method="post" action="">
<div class="jumbotron">
<input type="text" name="un" placeholder="User Name" required="required"></input><br>
<input type="text" name="fn" placeholder="Full Name" required="required"></input><br>
<input type="email" name="email" placeholder="Your Email" required="required"></input><br>
<input type="password" name="pass" placeholder="Password" required="required"></input><br>
<input type="text" name="age" placeholder="Age" required="required"></input><br>
Sex : <select  name="sex">
	<option value="male">Male</option>
	<option value="female">Female</option>
</select><br>
<input type="text" name="location" placeholder="City" required="required"></input><br>
<input type="text" name="bg" placeholder="Blood Group" required="required"></input>
<select  name="pon">
	<option value="positive">+</option>
	<option value="negative">-</option>
</select><br>
Donate? <select  name="donate">
	<option value="yes">Yes</option>
	<option value="no">No</option>
</select><br>
<input type="text" name="phone" placeholder="Phone Number" required="required"></input><br>


</div>
<hr>
<input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="register" value="Register"></input> <a href="login.php"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Login</button></a>
<hr>
</form>
</div>




</div>
</main>
</div>
</div>
</div>



</body>
</html>