<?php

namespace app\models;

use app\engine\Db;
use app\interfaces\IModels;

abstract class Model implements IModels
{
    protected $db;

    public function __construct()
    {
        $this->db = Db::getInstance();
    }

    public function insert() {
        $array_fields = [];
        $array_values = [];
        foreach ($this as $key => $value){
            if ($key != 'db'){
                array_push($array_fields, $key);
                array_push($array_values, $value);
            }
        }
        $array_fields = implode(", ", $array_fields);
        $array_values = implode(", ", $array_values);
        echo '<pre>';
        var_dump($array_fields);
        echo '</pre>';
        //INSERT INTO `Product`(`id`, `name`, `description`, `category`, `image`, `price`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])
        $sql = "INSERT INTO {$this->getTableName()} ({$array_fields}) VALUES ({$array_values})";
        var_dump($sql);
        var_dump($this->db);
    }

    public function delete() {

    }

    public function update() {

    }

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM `{$tableName}` WHERE id = :id";
        return $this->db->queryOne($sql, ['id' => $id]);
    }
    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM `{$tableName}`";
        return $this->db->queryAll($sql);
    }

    abstract public function getTableName();

}