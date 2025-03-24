<?php 

$amount = 100;
$merchant_id ="your_sandbox_api_key_here";
$order_id = uniqid();
$merchant_secret = "your_sandbox_secret_here";
$currency = "LKR";

$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);

$array = [];

$array["items"] = "Door bell wireles";
$array["first_name"] = "saman";
$array["last_name"] = "kumara";
$array["email"] = "info@gmail.com";
$array["phone"] = "94718931";
$array["address"] = "nuwara,eliya";
$array["city"] = "kandy";
 
$array["amount"] = $amount;
$array["merchant_id"] = $merchant_id;
$array["order_id"] = $order_id;
$array["currency"] = $currency;
$array["hash"] = $hash;

$jsonObject = json_encode($array);


echo $jsonObject;

?>