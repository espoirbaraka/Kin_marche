<?php
    include("./bd_class.php");
    include("./stripe.php");

    $token = $_POST["stripeToken"];
    $token_card_type = $_POST["stripeTokenType"];
    $email           = $_POST["stripeEmail"];
    $prix          = $_POST["amount"]; 
    $client          = $_SESSION["client"]; 
    $charge = \Stripe\Charge::create([
        "amount" => $prix,
      "currency" => 'usd',
      "source"=> $token,
    ]);

    $data = [$token, $client, $prix];
    $req = "INSERT INTO t_paiement(CodeTransaction, Client, Montant) VALUES(?,?,?)";
    $res = $app->prepare($req, $data, 1);

    if($charge){
        $_SESSION['success'] = "Paiement bien effectué de $prix $ au compte de OK Market ";
        unset($_SESSION['cart']);
      header("Location:../cart.php");
    }
?>