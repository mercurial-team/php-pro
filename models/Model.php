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
        foreach ($this as $key => $value)
            var_dump("$key => $value");
        $sql = "INSERT INTO ()...";
var_dump($sql);
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