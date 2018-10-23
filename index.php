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


<div style="width: 100%;">
<div id="one" style="float:left; width: 50%">
<!-- Wide card with share menu button -->
<style>
.demo-card-wide.mdl-card {
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('http://bdamauritius.com/linkcontent/userfiles/image/Blood-Donation.jpg') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
#wc {
  color: black;
}
</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 id="wc" class="mdl-card__title-text">Donate Blood</h2>
  </div>
  <div class="mdl-card__supporting-text">
   Across Bangladesh, every day there remains an urgent need for all types of blood groups.Especially donors 
with rare blood groups such as O Negative, B Negative and A negative are in high demand. Your timely
response essential to the supply of healhy blood for the massive daily demand we face.


Your donation can save the lives of many, make a difference or simply make you feel great about your 
contribution to humanity. Whatever your reason, whatever your motivation we welcome you to learn more
about eligiblity and benefits of donating blood with a trusted organization like us.

Find out more about local blood drives and our campaigns near you. Donate blood, save lives. 
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a href="donate.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      Get Started
    </a>
  </div>
  <div class="mdl-card__menu">
    <a href="https://www.facebook.com/sharer/sharer.php?u=http://twitter.com" target="_blank" class="mdl-button mdl-js-button mdl-button--fab">
      <i  class="material-icons">share</i>
    </a>
  </div>
</div>
</div>





<!-- 
<?php 

 if (isset($_POST['search'])) {
  
$bg = $_POST['bg'];
$pon = $_POST['pon'];
$location = $_POST['location'];

echo "$bg, $pon, $location";

 $sql = " select * from user where bg = '$bg' AND pon = '$pon' AND loc = '$location' ";

if ($conn->query($sql)===true) {
    echo "<p align=center style=background-color:#63F786>Successfuly Updated :)</p>";
  }else{
    echo "Error: " . $conn->error;
  }



// header('Location: account.php');

 }



?>
 -->






 <div id="two" style="float:right; width : 50%">
<div align="center">
<form name="search" method="post" action="search.php" class="navbar-form navbar-center" role="search">
        <div class="form-group">
          <input name="bg" type="text" class="form-control" placeholder="Blood Group" required>
         <select name="pon" >
  <option value="positive">positive</option>
  <option value="negative">negative</option>
      </select> 
      <input name="location" type="text" class="form-control" placeholder="City" required>
        </div>
        <input type="submit" name="search" value="search" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent" ></input>
      </form>
<span class="glyphicons glyphicons-info-sign"></span>


<div id="tt" align="right">

 <!-- Large Tooltip -->
<div id="tt2" class="icon material-icons">info</div>
<div class="mdl-tooltip mdl-tooltip--large" for="tt2">
Search pattern example : " B positive dhaka "
</div>
</div>  


</div>

    </div>
    </div>
    </div>
    <div style="clear:both"></div>

  </main>
</div>
</div>



</body>
</html>