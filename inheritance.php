<?php

abstract class Unit{
    public $name;
    public $alive = true;
    public $weapon;

    public function __construct($name, $weapon){
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function move(){
        echo $this->name . ' is moving to the battlefield ';
    }

    abstract  function attack();

}

class Soldier extends unit{
    public function attack(){
        echo $this->name . ' cut with ' . $this->weapon;
    }
}

class Archer extends unit{
    public function attack(){
        echo $this->name . ' is attacking with ' . $this->weapon;
    }
}

$archer = new Archer('archer', 'bow');
$soldier = new Soldier('soldier', 'sword');

echo "<p>{$soldier->move()} {$archer->attack()}</p>";