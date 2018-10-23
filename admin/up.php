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




	<title>Update User Profile</title>
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
<div class="container" align="center">
<div class="panel panel-danger" style="width: 40%">
  <div class="panel-body">Update User Profile</div>
</div>

<?php 

 if (isset($_POST['update'])) {

$id = $_POST['id']; 	
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

 $sql = "UPDATE user SET un = '{$un}', fn = '{$fn}', email = '{$email}', pass = '{$pass}' , sex = '{$sex}' , loc = '{$location}' , bg = '{$bg}' , pon = '{$pon}' , donate = '{$donate}' , phone = '{$phone}' where 
 id = $id ";

if ($conn->query($sql)===true) {
		echo "<p align=center style=background-color:#63F786>Successfuly Updated :)</p>";
	}else{
		echo "Error: " . $conn->error;
	}



// header('Location: account.php');

 }



?>



<form role="form" name="reg" method="post" action="">
<div class="jumbotron">
<input type="text" name="id" placeholder="User Id" required="required" value=""></input><br>
<input type="text" name="un" placeholder="User Name" required="required" value=""></input><br>
<input type="text" name="fn" placeholder="Full Name" required="required" value=""></input><br>
<input type="email" name="email" placeholder="Your Email" required="required" value=""></input><br>
<input type="text" name="pass" placeholder="Password" required="required" value=""></input><br>
<input type="text" name="age" placeholder="Age" required="required" value=""></input><br>
Sex : <select  name="sex">
	<option value="male">Male</option>
	<option value="female">Female</option>
</select><br> 
<input type="text" name="location" placeholder="Location" required="required" value=""></input><br>
<input type="text" name="bg" placeholder="Blood Group" required="required" value=""></input><br>
<select  name="pon">
	<option value="positive">+</option>
	<option value="nagetive">-</option>
</select><br>
Donate? <select  name="donate">
	<option value="yes">Yes</option>
	<option value="no">No</option>
</select><br>
<input type="text" name="phone" placeholder="Phone Number" required="required" value=""></input><br>


</div>
<hr>
<input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="update" value="update"></input> 
<!-- <a href="logout.php"><button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Log Out</button></a> -->
<!-- <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="logout.php">Log Out</a> -->
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


