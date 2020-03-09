<?php
session_start();
include "../connect.php";
if(!(isset($_SESSION['user_id']) && (int)$_SESSION['user_id']))
{
  header('Location: login.php');
  exit();
}

$id = $_GET['id'];

$sql = "DELETE FROM images WHERE id =  $id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
header('Location: gallery.php');