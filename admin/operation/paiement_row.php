<?php 
	include '../../manager/bd_class.php';
	if(isset($_POST['id'])){
		$id = $_POST['id'];
		$conn = $app->getPDO();
		
		$sql = "SELECT * FROM t_paiement WHERE CodePaiement = $id";
        $req = $app->fetch($sql);
        

		echo json_encode($req);
	}
?>