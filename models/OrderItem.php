<?php
namespace app\models;


class OrderItem extends Model
{
    public $id;
    public $idOrder;
    public $idProduct;
    public $count;

    public function getTableName()
    {
        return "OrderItem";
    }

}