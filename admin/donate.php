<?php 
include 'config.php';
?>

<?php 
session_start();
if (isset($_SESSION["id"])) {
}else{
  header('Location: index.php');
}
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
        <a class="mdl-navigation__link" href="account.php">Back</a>
        <a class="mdl-navigation__link" href="logout.php">Log Out</a>
       
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Blood Bank</span>
    <nav class="mdl-navigation">
       <a class="mdl-navigation__link" href="account.php">Back</a>
        <a class="mdl-navigation__link" href="logout.php">Log Out</a>
      
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">

<?php
if (isset($_POST['register'])) {

$username = $_POST['un'];
$password = $_POST['pass'];
$aemail = $_POST['email'];

$sql = 
"INSERT INTO admin (username, password, aemail) Values('$username', '$password', '$aemail')";
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
<input type="text" name="pass" placeholder="Password" required="pass"></input><br>
<input type="email" name="email" placeholder="Your Email" required="required"></input><br>


</div>
<hr>
<input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="register" value="Register"></input> </a>
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