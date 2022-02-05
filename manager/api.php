<?php
session_start();
require 'bd_class.php';
$event = $_POST['event'];

// ALL CREATE REQUEST

if ($event == 'CREATE_ENTREPRISE') {
   $filename = $_FILES['logo']['name'];
   $data = [$_POST['designation'], $_POST['telephone'], $_POST['email'], $_POST['site'], $_POST['datecreate'], $_POST['adresse'], $_POST['couleur'], $filename];
   $sql = "INSERT INTO t_entreprise(DesignationEntreprise,ContactEntreprise,EmailEntreprise,SiteWebEntreprise,DateCreation,AdresseEntreprise,Couleur,LogoEntreprise) VALUES(?,?,?,?,?,?,?,?)";
   if ($filename != '') {
      if ($app->prepare($sql, $data, 1)) {
         move_uploaded_file($_FILES['logo']['tmp_name'], '../fichier/' . $filename);
         $_SESSION['success'] = 'Entreprise ajoutée';
      } else {
         $_SESSION['error'] = 'Entreprise non ajoutée';
      }
   }
   header("Location: ../entreprise.php");
}

// ALL UPDATE REQUEST

if ($event == 'UPDATE_ENTREPRISE') {
   $data = [$_POST['designation'], $_POST['contact'], $_POST['email'], $_POST['site'], $_POST['adresse'], $_POST['id']];
   $sql = "UPDATE t_entreprise SET DesignationEntreprise=?, ContactEntreprise=?, EmailEntreprise=?, SiteWebEntreprise=?, AdresseEntreprise=? WHERE CodeEntreprise=?";
   if ($app->prepare($sql, $data, 1)) {
      $_SESSION['success'] = 'Entreprise modifiée';
   } else {
      $_SESSION['error'] = 'Entreprise non modifiée';
   }
   header("Location: ../entreprise.php");
}

// ALL DELETE REQUEST

if ($event == 'DELETE_ENTREPRISE') {
   $data = [$_POST['id']];
   $sql = "DELETE FROM t_entreprise WHERE CodeEntreprise=?";
   if ($app->prepare($sql, $data, 1)) {
      $_SESSION['success'] = 'Entreprise supprimée';
   }
   header("Location: ../entreprise.php");
}




