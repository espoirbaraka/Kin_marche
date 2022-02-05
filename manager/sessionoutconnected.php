<?php
	include 'bd_class.php';

		if(isset($_SESSION['admin']))
		{
			header('location: admin/home.php');
		}elseif(isset($_SESSION['client'])){
			header('location: index.php');
		}
	

?>