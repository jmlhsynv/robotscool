<?php
session_start();
$_SESSION['user_id'] = 0;
include "../connect.php";


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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
</head>
<body class="login-body">
	<div class="login-main col-12 float-left">
		<div class="col-12 col-md-8 login-card">
			<div class="col-12 float-left p-0">
				<div class="col-12 col-md-6 float-left imgcol">
					<div class="col-12 p-5 float-left">
						<div class="col-12 float-left p-md-5 js-tilt">
							<img src="img/logo.png" width="100%" class="">
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 float-left ">
					<div class="col-12 float-left p-0 mt-md-5   ">
						<form action="" method="POST" class="form-group align-self-center mt-md-5">
							<input type="text" class="form-control mt-md-5"  name="login" placeholder="E-mail"><br>
							<input type="password"  class="form-control" name="password" placeholder="Password"><br>
							<input type="submit" name="submit" value="Login" class="btn btn-block btn-success"> 
						</form>
						<?php 
						if(
							isset($_POST['login']) && is_string($_POST['login']) && trim($_POST['login']) &&
							isset($_POST['password']) && is_string($_POST['password']) && trim($_POST['password'])
						)
						{
							$login = trim($_POST['login']);
							$password = md5(trim($_POST['password']));
							
							$check = $pdo->prepare("SELECT id FROM user WHERE login=:login AND password=:password"); //registerdeki login ve sifrenin yeni ile beraberliyi
							$check->bindParam(':login', $login);
							$check->bindParam(':password', $password);
							$check->execute();
							$check = $check->fetch(PDO::FETCH_ASSOC);

							if(isset($check['id']) && (int)$check['id'])  //bele id varsa ve 0dan ferqlidise
							{
								$_SESSION['user_id'] = (int)$check['id']; //hemin id ni sessiona beraberlesdir
								header('Location: index.php');
								exit();
							}
							else
							{
								print "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
									  <strong>Login və ya şifrə yanlışdır!</strong> 
									  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
									    <span aria-hidden='true'>&times;</span>
									  </button>
									</div>";
							}
						}

						?>
					</div>
				</div>
			</div>
		</div>		
	</div>
	
<script src="js/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>	
</body>
</html>