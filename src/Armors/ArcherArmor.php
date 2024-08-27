<?php

namespace Medine\Armors;

use Medine\Attack;

class ArcherArmor implements Armor
{
    public function reduceDamage(Attack $attack): int
    {
        if (rand(0, 1)) {
            return $attack->getDamage();
        }else{
            return $attack->getDamage() * 0;
        }
    }
}
