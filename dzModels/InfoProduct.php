<?php

namespace app\dzModels;

class InfoProduct extends ProductItem
{
	
	public function __construct($id = null, $name = null, $description = null, $costPrice = null, $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
		$this->image = $image;
        $this->costPrice = $costPrice;
		$this->profitPercentage = 0.5;
    }
	
}