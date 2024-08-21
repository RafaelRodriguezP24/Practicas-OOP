<?php

namespace Medine;

use Flexio\Armor;
class Archer extends unit{
    protected int $damage = 20;
    protected Armor $armor;
    public function __construct($name, Armor $armor = null){
        parent::__construct($name);
        parent::setArmor($armor);
    }
    public function attack(unit $opponent): void
    {
        show("{$this->name} dispara una flecha a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }
}

