<?php  
session_start();
include "../connect.php";
if(!(isset($_SESSION['user_id']) && (int)$_SESSION['user_id']))
{
  header('Location: login.php');
  exit();
}

if (isset($_POST['password']) && is_string($_POST['password']) && trim($_POST['password']) &&
	isset($_POST['confirm_psw']) && is_string($_POST['confirm_psw']) && trim($_POST['confirm_psw'])) {

	if ($_POST['password']===$_POST['confirm_psw']) {
		$password =md5(trim($_POST['password']));
		$update = $pdo->prepare("UPDATE user SET password=:password WHERE id=1");
		$update->bindParam(':password',$password);
		$update->execute();
	}
	else{
		print("password and Confirm password does not match!");
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