<?php
	include 'bd_class.php';

	if(!isset($_SESSION['admin']) || trim($_SESSION['admin']) == ''){
		header('location: ../login.php');
		exit();
	}

	$conn = $app->getPDO();
	$id = $_SESSION['admin'];
	$sql = "SELECT * FROM t_user
			WHERE CodeUser=$id";
	$req = $app->fetch($sql);

?>