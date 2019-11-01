<?php

namespace app\dzModels;

class WeightProduct extends ProductItem
{
	
	public $weight;
	
	public function __construct($id = null, $name = null, $description = null, $costPrice = null, $weight = 0, $price = 0, $totalPrice = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
		$this->image = $image;
        $this->costPrice = $costPrice;
		$this->profitPercentage = 1;
		$this->weight = $weight;
		$this->totalPrice = $totalPrice;
    }
	
	public function calcTotal(){
		$this->totalPrice = $this->weight * $this->calcPrice();
	}

}