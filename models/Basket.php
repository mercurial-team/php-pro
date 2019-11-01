<?php

namespace app\models;

class Basket
{
    public $id;
    public $items = [];
    public $TotalPrice;

   public function getTableName()
   {
       return "basket";
   }
   public function addProduct(Product $product){
	   array_push($this->items, $product);
   }
   public function deleteProduct(array $array, $id){
		//Ищем по id товар и удаляем.
		return $array;
	}


}