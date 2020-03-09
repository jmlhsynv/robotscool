<?php 

$pdo = null;

try {
	$pdo = new PDO('mysql:host=localhost;dbname=robotscool', 'root', '');
} catch (Exception $e) {
	var_dump($e->getMessage());
	exit("Xeta!");
}