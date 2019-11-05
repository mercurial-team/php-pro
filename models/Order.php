<?php
namespace app\models;


class Order extends Model
{
    public $id;
    public $idUser;

    public function getTableName()
    {
        return "Order";
    }

}