<?php
session_start();
include "../connect.php";
if(!(isset($_SESSION['user_id']) && (int)$_SESSION['user_id']))
{
  header('Location: login.php');
  exit();
}


$sql = "DELETE FROM images";
$stmt = $pdo->prepare($sql);
$stmt->execute();
header('Location: gallery.php');