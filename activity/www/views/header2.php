<!DOCTYPE html>
<html lang="en">
<head>
<style>
nav.navbar.navbar-inverse {
    height: 130px;
    border-radius: 0px;
}
ul.nav.navbar-nav.navbar-right {
    margin-top: 45px;
}
.navbar-inverse .navbar-nav>li>a {
    color: #fff !important;
}
h1.mb-4 {
    color: #fff;
    padding-top: 250px;
}
p.caps {
    color: #fff;
}
</style>
  <title>Activity Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="js/main.js" async></script>
  
</head>
<body ></body>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand active" href="index2.php"><img src="images/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="index2.php">Home</a></li>
        
        <li><a href="aboutus.php">About us</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Login</a></li>
		<li><a href="register.php"><span class="glyphicon glyphicon-log-out"></span> Signup</a></li>
		
		<?php// echo $users['email']; ?>
		
      </ul>
    </div>
  </div>
</nav>
<section class="container" >
<?php //echo  'session '.$_SESSION['email']; exit; ?>
  

