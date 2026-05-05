<?php
require __DIR__.'/vendor/autoload.php';

use App\User;
use Database\Modelo\ProductModelo;

$user = new User;
echo $user->getName();
echo "\n";

$product = new ProductModelo;
echo $product->getId();

echo "\n";
?>