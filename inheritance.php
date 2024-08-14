<?php

abstract class unit{
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

class soldier extends unit{
    public function attack(){
        echo $this->name . ' cut with ' . $this->weapon;
    }
}

class archer extends unit{
    public function attack(){
        echo $this->name . ' is attacking with ' . $this->weapon;
    }
}

$archer = new archer('archer', 'bow');
$soldier = new soldier('soldier', 'sword');

echo "<p>{$soldier->move()} {$archer->attack()}</p>";