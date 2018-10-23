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

<?php
$nuser = $_SESSION["id"];
$res = $conn->query("select * from admin where id = '$nuser'");
$row = $res->fetch_array(MYSQLI_BOTH);


$_SESSION["un"] = $row['username'];
$_SESSION["email"] = $row['aemail'];
$_SESSION["pass"] = $row['password'];

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




	<title>Admin Panel</title>
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
        <a class="mdl-navigation__link" href="logout.php">Log Out</a>
        
       
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Blood Bank</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="logout.php">Log Out</a>
      
      
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
<div class="container" align="center">
<div class="panel panel-danger" style="width: 40%">
  <div class="panel-body">Admin Panel</div>
</div>

<?php 

 if (isset($_POST['update'])) {
 	
$un = $_POST['un'];
$email = $_POST['email'];
$pass = $_POST['pass'];

 $sql = "UPDATE admin SET username = '{$un}', password = '{$pass}', aemail = '{$email}' where id = $nuser ";

if ($conn->query($sql)===true) {
		echo "<p align=center style=background-color:#63F786>Successfuly Updated :)</p>";
	}else{
		echo "Error: " . $conn->error;
	}



// header('Location: account.php');

 }



?>

<hr>
<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="donate.php">Add Admin</a> 
<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="show.php">List All User</a>
<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="showadmin.php">List All Admin</a> 
<hr>
<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="delete.php">Delete User</a>
<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="up.php">Update User Info</a> 
<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="m.php">Mutual D&A</a> 
<hr>
<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="ma.php">User Ip Check</a> 
<hr>



<!-- 

<form role="form" name="reg" method="post" action="">
<div class="jumbotron">
<input type="text" name="un" placeholder="User Name" required="required" value="<?php echo $_SESSION["un"]; ?>"></input><br>
<input type="email" name="email" placeholder="Your Email" required="required" value="<?php echo $_SESSION["email"]; ?>"></input><br>
<input type="text" name="pass" placeholder="Password" required="required" value="<?php echo $_SESSION["pass"]; ?>"></input><br>


</div>
<hr>
<input class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" type="submit" name="update" value="update"></input> 

<a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="logout.php">Log Out</a>
<hr>
</form>
 -->

























<!-- <form name="update" method="post" action="">
<input type="text" name="name" required="required" value="<?php echo $_SESSION["name"]; ?>"></input><br>
<input type="password" name="pass"  required="required" value="<?php echo $_SESSION["pass"]; ?>"></input><br>
<input type="email" name="email" required="required" value="<?php echo $_SESSION["email"]; ?>"></input><br>
<select name="sex">
	<option value="m">Male</option>
	<option value="f">Female</option>
</select><br>
<input type="submit" name="update" value="Update"></input> <hr>
</form> -->
</div>

</div>
</main>
</div>
</div>
</div>
</body>
</html>


