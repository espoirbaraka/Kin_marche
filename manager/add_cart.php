<?php
session_start();
require 'bd_class.php';
if(isset($_POST['add_cart'])){
    $prod = $_POST['code'];
    if(isset($_SESSION['cart'])){
        $session_array = array_column($_SESSION['cart'], "id");

        if(!in_array($_POST['code'], $session_array)){
            $session_array = array(
            'id' => $_POST['code'],
            'name' => $_POST['name'],
            'prix' => $_POST['prix'],
            'quantite' => $_POST['quantite'],
            'image' => $_POST['image']
            );
            $_SESSION['cart'][] = $session_array;
        }
    }else{
        $session_array = array(
            'id' => $_POST['code'],
            'name' => $_POST['name'],
            'prix' => $_POST['prix'],
            'quantite' => $_POST['quantite'],
            'image' => $_POST['image']
        );
        $_SESSION['cart'][] = $session_array;
    }
}
header("Location: ../detail_produit.php?produit=$prod");
