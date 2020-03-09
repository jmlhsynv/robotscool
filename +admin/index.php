<?php
session_start();
include "../connect.php";
if(!(isset($_SESSION['user_id']) && (int)$_SESSION['user_id']))
{
  header('Location: login.php');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#0B4163">
	<title>Robotscool | Admin</title>
	<link rel="icon" href="img/logo.png">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="js/script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	
</head>
<body>

<div id="wrapper">

  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <img src="img/logo.png" alt="" >
    </div>
    <ul class="sidebar-nav ">
      <li class="active">
        <a href="index.php"><i class="fa fa-home"></i>Home</a>
      </li>
      <li>
        <a href="settings.php"><i class="fas fa-user-cog"></i>Settings</a>
      </li>
      <li>
        <a href="gallery.php"><i class="far fa-images"></i></i>Gallery</a>
      </li>
      <li>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </li>
    </ul>
  </aside>

  <div id="navbar-wrapper">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#" class="navbar-brand" id="sidebar-toggle" ><i class="fa fa-bars"></i></a>
        </div>
      </div>
    </nav>
  </div>

  <section id="content-wrapper">
      <div class="row">
        <div class="col-12">
          <h1>home page</h1>
        </div>
      </div>
  </section>
</div>
<script>
$("#sidebar-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>
</body>
</html>