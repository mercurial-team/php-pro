<?php

namespace app\dzModels;

class HardProduct extends ProductItem
{
	
	public $countProduct;
	public $totalPrice;
	
	public function __construct($id = null, $name = null, $description = null, $costPrice = null, $price = null, $countProduct = 1, $totalPrice = 0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
		$this->image = $image;
        $this->costPrice = $costPrice;
		$this->profitPercentage = 1;
		$this->countProduct = $countProduct;
		$this->totalPrice = $totalPrice;
    }
	
	public function calcTotal(){
		$this->totalPrice = $this->countProduct * $this->calcPrice();
	}

}