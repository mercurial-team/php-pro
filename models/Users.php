<?php
namespace app\models;

class Users extends Model
{
    public $id;
    public $login;
    public $password;
    public $name;
    public $balance;

    public function getTableName()
    {
        return "User";
    }
}