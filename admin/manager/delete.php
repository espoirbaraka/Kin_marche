<?php
session_start();
require '../../manager/bd_class.php';
$event=$_POST['event'];


 if($event=='DELETE_USER'){
    $data=[$_POST['id']];
    $sql="DELETE FROM t_user WHERE CodeUser=?";
    if($app->prepare($sql,$data,1)){
     $_SESSION['success'] = 'Utilisateur supprimé';
    }
    header("Location: ../user.php");
 }

 if($event=='DELETE_CATEGORIE'){
   $data=[$_POST['id']];
   $sql="DELETE FROM t_categorie_produit WHERE CodeCategorie=?";
   if($app->prepare($sql,$data,1)){
    $_SESSION['success'] = 'Categorie supprimée';
   }
   header("Location: ../categorie_produit.php");
}

if($event=='DELETE_PRODUIT'){
   $data=[$_POST['id']];
   $sql="DELETE FROM t_produit WHERE CodeProduit=?";
   if($app->prepare($sql,$data,1)){
    $_SESSION['success'] = 'Produit supprimé';
   }
   header("Location: ../produit.php");
}
 
?>