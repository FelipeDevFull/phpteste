<?php

require __DIR__.'/vendor/autoload.php';


use App\Cart;
use App\Fee;

$obgFee  = new Fee;

$obgCart = new Cart($obgFee);
$obgCart->setName("Tv 42 polegada");
$obgCart->setValue('1150');
$resultCart = $obgCart->getTotalCart();


echo "<pre>";
print_r($resultCart);
echo "</pre>";