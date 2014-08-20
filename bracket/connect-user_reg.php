<?php
try{
$username="root";
$password="";
	$handler = new PDO("mysql:host=127.0.0.1;dbname=longbook",$username,$password);
	echo "connected";
	$query=$handler->prepare("INSERT INTO `user_reg`(`email`, `password`) VALUES(:name, :password)");
	$query()
	echo $query;
}catch(PDOException $e){
	
	die();
}
?>