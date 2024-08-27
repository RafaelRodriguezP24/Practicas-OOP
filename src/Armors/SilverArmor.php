<?php

namespace Medine\Armors;

use Medine\Attack;

class SilverArmor implements Armor
{
    public function reduceDamage(Attack $attack): int
    {
        if ($attack->isPhysical()) {
            return $attack->getDamage() / 2;
        }
        return $attack->getDamage();
    }
}
