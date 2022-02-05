<?php
require '../../manager/bd_class.php';
$event=$_POST['event'];


 if($event=='UPDATE_USER'){
    $data=[$_POST['username'],$_POST['email'],sha1($_POST['password']),$_POST['id']];
    $sql="UPDATE t_user SET Username=?, Email=?, Password=? WHERE CodeUser=?";
    if($app->prepare($sql,$data,1)){
     $_SESSION['success'] = 'Utilisateur modifié';
    }
    header("Location: ../user.php");
 }

 if($event=='UPDATE_CATEGORIE'){
   $data=[$_POST['categorie'],$_POST['id']];
   $sql="UPDATE t_categorie_produit SET Categorie=? WHERE CodeCategorie=?";
   if($app->prepare($sql,$data,1)){
    $_SESSION['success'] = 'Categorie modifiée';
   }
   header("Location: ../categorie_produit.php");
}

if($event=='UPDATE_PRODUIT'){
   $data=[$_POST['produit'], $_POST['description'], $_POST['prix'] ,$_POST['id']];
   $sql="UPDATE t_produit SET Produit=?, Description=?, Prix=? WHERE CodeProduit=?";
   if($app->prepare($sql,$data,1)){
    $_SESSION['success'] = 'Produit modifié';
   }
   header("Location: ../produit.php");
}
 ?>