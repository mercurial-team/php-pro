<?php

use app\models\{Basket, Product, Users};
use app\engine\{Autoload, Db};

include realpath("../config/config.php");
include realpath("../engine/Autoload.php");

spl_autoload_register([new Autoload(), 'loadClass']);


//$product = new Product("Пицца","Описание", 125);
$product = new Product();
$product->name = "Чай";
$product->insert();
//$product->delete();

$product = $product->getOne(1);


//$product->delete();
var_dump($product);



