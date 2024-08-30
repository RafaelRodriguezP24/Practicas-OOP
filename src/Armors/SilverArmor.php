<?php

namespace Medine\Armors;

use Medine\Attack;

class SilverArmor extends Armor
{
    public function reducePhysicalDamage(Attack $attack): int
    {
        return $attack->getDamage() / 2;
    }
}
