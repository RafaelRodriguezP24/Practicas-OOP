<?php

namespace Medine;

use Medine\Armors\Armor;

class Soldier extends unit{
    protected int $damage = 40;
    protected Armor $armor;
    public function __construct($name, Armor $armor = null){
        parent::__construct($name);
        parent::setArmor($armor);
    }

    public function attack(unit $opponent): void
    {
        show("{$this->name} ataca con la espada a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }
}
