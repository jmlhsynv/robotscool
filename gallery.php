<?php
include "connect.php";
$data = $pdo->prepare("SELECT * FROM images ORDER BY id DESC");
$data->execute();
$data = $data->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#0B4163">
	<meta name="description" content="">
	<meta name="keyword" content="">
	<meta name="title" content="">
	<title>RobotScool</title>
	<link rel="icon" href="img/logo.png">
	<link rel="apple-touch-icon" href="img/logo.png">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://unpkg.com/tilt.js@1.1.21/dest/tilt.jquery.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- 1. Add latest jQuery and fancybox files -->

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-light light-bg sticky-top w-100 col-12 float-left">
	<a class="navbar-brand ml-md-5" href="index.html"><img src="img/logo.png" class="ml-md-5 ml-2" alt="RobotScool-logo"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <i class="fas fa-bars"></i>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  <ul class="navbar-nav">
	    <li class="nav-item">
	      <a class="nav-link" href="kurslar.html">Kurslar</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Yarışlar</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Robot Masters</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Mağaza</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Məqalələr</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Qalereya</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" href="#">Haqqımızda</a>
	    </li>
	    
	  </ul>
	  
	</div>
</nav>
<!-- //header -->

<div class="clearfix"></div>

<!-- Main -->
<div class="col-12 col-md-12 float-left maincourse mt-5 mb-5" >
	<div class="container">
		<div id="gallery" class="container-fluid ">  
		  <?php  
		  	foreach ($data as $key => $value) {
		  		print("
		  			<a data-fancybox='gallery' href='".$value['image']."'>
						<img src='".$value['image']."' alt='".$value['name']."' class='card img-responsive'>
		  			</a>
		  			");
		  	}
		  ?>

		</div>

	</div>
</div>
<!-- //Main -->
<!-- footer -->
<div class="col-12 float-left footer pt-3 pb-5">
	<div class="container pl-0 pr-0 ">
		<h2 class="text-center text-light mb-3">RobotScool</h2>
		<div class="col-12 float-left">
			<div class="col-12 col-md-5  float-left">
				<iframe title="map" src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d6076.412393308538!2d49.860614876694996!3d40.40428266746634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e3!4m5!1s0x40307d4fae216469%3A0xfb10ef6665ea0b78!2sNariman+Narimanov+st.%2C+Baku!3m2!1d40.403828!2d49.868356999999996!4m5!1s0x40307d5a83e63f61%3A0x2e8f7d2fae4cac5!2sBeyn%C9%99lxalq+T%C9%99lim+v%C9%99+Layih%C9%99+M%C9%99rk%C9%99zi%2C+92+Academician+Hasan+Aliyev+St%2C+Baku%2C+Azerbaijan!3m2!1d40.4050723!2d49.8619114!5e0!3m2!1saz!2s!4v1559938716097!5m2!1saz!2s" width="100%" height="350" frameborder="0" style="border:0; border-radius: 2px;" allowfullscreen=""></iframe>
			</div>
			<div class="col-12 col-md-4 float-left">
				<ul class="list-unstyled">
					<li>
						<a href="#" aria-label="Robotscool adresi"><i class="fas fa-map-marker"></i>
							Aşıq Molla Cümə Küç. 138, 3-cü mərtəbə
						</a>
					</li>
					<li>
						<a href="#" aria-label="Robotscool telefon nomresi "><i class="fas fa-phone"></i>
							(+994)50 999 66 66
						</a>
					</li>
					<li>
						<a href="#" aria-label="Robotscool e-mail adresi"><i class="fas fa-envelope-open"></i>
							info@robotscool.az
						</a>
					</li>
				</ul>
				<ul class="list-unstyled">
					<li><a href="#" aria-label="Robotscool facebook adresi"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="#" aria-label="Robotscool linkedin adresi"><i class="fab fa-linkedin"></i></a></li>
					<li><a href="#" aria-label="Robotscool instagram adresi"><i class="fab fa-instagram"></i></a></li>
				</ul>
			</div>
			<div class="col-12 col-md-3 float-left">
				<h5 class="text-center font-weight-normal mt-3 mt-md-0">Fikirlərinizi bizə yazın.</h5>
				<form>
				  <div class="form-group">
				  	<label for="#exampleInputName"></label>
				    <input type="email" class="form-control" id="exampleInputName" placeholder="Ad və soyad" name="adsoyad">
				  </div>
				  <div class="form-group">
				  	<label for="exampleInputEmail"></label>
				    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email" name="email">
				  </div>
				  <div class="form-group">
				  	<label for="exampleTextarea"></label>
				    <textarea name="mesaj" id="exampleTextarea" class="form-control" rows="6" placeholder="Mesajınız."></textarea>
				  </div>
				  
				  <button type="submit" class="btn ">Göndər!</button>
				</form>
			</div>
		</div>
		<div class="col-12 float-left pb-3 mt-5">
			<p class="text-center text-light font-weight-normal"><span class="mr-1">&copy;</span> RobotScool 2019</p>
			<button onclick="window.scrollTo({top: 0, behavior: 'smooth'});" class="btn btn-dark upbtn"><i class="fas fa-angle-double-up"></i></button>
		</div>
	</div>
</div>
<!-- //footer  -->
<script>
	AOS.init({
		offset:250,
		duration:1000
	});
</script>	

</body>
</html>