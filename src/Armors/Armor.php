<?php

namespace Medine\Armors;

use Medine\Attack;
use Medine\Unit ;

abstract class Armor
{
    public function reduceDamage(Attack $attack): int
    {
        if ($attack->isMagical()) {
            return $this->reduceMagicalDamage($attack);
        }

        return $this->reducePhysicalDamage($attack);
    }

    public function reducePhysicalDamage(Attack $attack): int
    {
        return $attack->getDamage();
    }

    public function reduceMagicalDamage(Attack $attack): int
    {
        return $attack->getDamage();
    }
}
