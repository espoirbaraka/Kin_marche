<?php
	session_start();
	// session_destroy();
	unset($_SESSION['client']);

	header('location: ../index.php');
?>