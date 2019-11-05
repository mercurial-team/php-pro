<?php

namespace app\models;

class Product extends Model
{
    public $id;
    public $name;
    public $description;
    public $category;
    public $image;
    public $price;

   public function getTableName()
   {
       return "Product";
   }


}