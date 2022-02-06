<?php
    require_once "../stripe-php-master/init.php";

    $stripeDetails = array(
        "secretKey" => "sk_test_51KPUgIHLxZc21QViEypRjqD5ULLxXoDHavBACoKyDZ2NrZMMApFNaglhVYMBlSThK9Q3LYwdzlb2228EVgwfH0Z000YMyXBnbf",
        "publishableKey" => "sk_test_51KPUgIHLxZc21QViEypRjqD5ULLxXoDHavBACoKyDZ2NrZMMApFNaglhVYMBlSThK9Q3LYwdzlb2228EVgwfH0Z000YMyXBnbf"
    );

    \Stripe\Stripe::setApiKey($stripeDetails["secretKey"]);
?>