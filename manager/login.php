<?php
	include 'sessionoutconnected.php';
	$conn = $app->getPDO();

	if(isset($_POST['submit'])){
		$email = $_POST['email'];
		$password = sha1($_POST['password']);
		try{
			$stmt = $conn->prepare("SELECT * FROM t_user WHERE Email = ? AND Password = ?");
            $stmt->execute(array($email,$password));
			$nbre = $stmt->rowCount();
			if($nbre == 1){
				$row = $stmt->fetch();
				if($row['CodeCategorie']==2){
					$_SESSION['client'] = $row['CodeUser'];
				}elseif($row['CodeCategorie']==1){
					$_SESSION['admin'] = $row['CodeUser'];
				}
				$_SESSION['username'] = $row['Username'];
				$_SESSION['email'] = $row['Email'];
				$_SESSION['categorie'] = $row['CodeCategorie'];
				
			}
			else{
				$_SESSION['error'] = 'Mot de passe incorrect';
			}
		}
		catch(PDOException $e){
			echo "Erreur de connexion: " . $e->getMessage();
		}
	}
	else{
		$_SESSION['error'] = 'Entrez vos identifiants de connexion d\'abord';
	}
	header('location: ../login.php');

?>
