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

if (isset($_POST['login'])) {
	 
	 $name = $_POST['name'];
	 $pass = $_POST['pass'];

 $res = $conn->query("select * from user where un ='$name' AND pass = '$pass' ");
 $row = $res->fetch_array(MYSQLI_BOTH);
 session_start();
 $_SESSION["id"] = $row['id'];

 header('Location: account.php');


}

else{
	echo "<p align=center style=color:red>Invalid login info</p>";
}

?>



<div class="container" align="center">
<div class="panel panel-danger" style="width: 40%">
  <div class="panel-body">Login Area</div>
</div>
<form name="login" method="post" action="">
<input type="text" name="name" placeholder="Username" required="required"></input><br>
<input type="password" name="pass" placeholder="Password" required="required"></input><br><br>
<input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="login" value="Login"></input> <hr>
</form></div>




</div>
</main>
</div>
</div>
</div>



</body>
</html>