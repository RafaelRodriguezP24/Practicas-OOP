<?php

namespace Medine\Armors;

use Medine\Attack;

class MissingArmor extends Armor
{
    public function reduceDamage(Attack $attack): int
    {
        return $attack->getDamage();
    }
}