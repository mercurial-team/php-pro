<?php

namespace app\dzModels;

class ProductItem
{
   public $id;
   public $name;
   public $description;
   public $costPrice; //Себестоимость
   public $price; //Итоговая стоимость
   public $profitPercentage;//наценка в процентах

   public function calcPrice(){
	   $this->price = $this->costPrice *(1+$this->profitPercentage);//получаем профит
	   return $this->price;
   }
   
   public function calcProfit(){
	   return $this->price - $this->costPrice; //Считаем прибыль
   }

}