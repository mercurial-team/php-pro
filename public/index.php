<?php

include "../engine/Autoload.php";

use app\engine\{Db};
use app\interfaces\{IModels};
use app\models\{Product, Users, Basket};
use app\dzModels\{ProductItem, InfoProduct, HardProduct, WeightProduct};



spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product(new Db());
$product2 = new Product(new Db());

$basket = new Basket(new Db());
$basket->addProduct($product);
$basket->addProduct($product2);

echo '<pre>';
var_dump($basket);
echo '<pre>';

$wp = new WeightProduct(1, 'Кокоинум', 'Пойдет', 100, 2);
$wp->calcTotal(); //считаем кокоинум

echo '<h2>Дз 3 часть</h2>';
echo '<pre>';
var_dump($wp);
echo '<pre>';

//$users = new Users(new Db());

function foo(IModels $model) {
    return $model->getTableName();
}

//echo foo($users);

//echo $product->getOne(1);