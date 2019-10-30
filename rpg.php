<?php
class Unit {
    public $name;
    public $health;
    public $damage;

    public function __construct($name, $health, $damage)
    {
        $this->name = $name;
        $this->health = $health;
        $this->damage = $damage;
    }

    public function attack(Unit $unit) {
        echo $this->name . " атакует " . $unit->name . " на " . $this->damage . " урона.";
        $unit->health -= $this->damage;
    }

}

$player = new Unit("Конан", 200, 20);
$monster = new Unit("Монстр", 100, 10);

var_dump($monster);

$player->attack($monster);

var_dump($monster);
