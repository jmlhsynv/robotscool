<?php  
session_start();
include "../connect.php";
if(!(isset($_SESSION['user_id']) && (int)$_SESSION['user_id']))
{
  header('Location: login.php');
  exit();
}

if (isset($_POST['login']) && is_string($_POST['login']) && trim($_POST['login']) &&
	isset($_POST['confirm_login']) && is_string($_POST['confirm_login']) && trim($_POST['confirm_login'])) {

	if ($_POST['login']===$_POST['confirm_login']) {
		$login = trim($_POST['login']);
		$update = $pdo->prepare("UPDATE user SET login=:login WHERE id=1");
		$update->bindParam(':login',$login);
		$update->execute();
	}
	else{
		print("Login and Confirm login does not match!");
	}
	print json_encode([
		'status'=>'success',
	]);


}else{
	print json_encode([
		'status'=>'error',
	]);
}


?>