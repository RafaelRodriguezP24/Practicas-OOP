<?php

namespace Medine\Armors;

use Medine\Attack;

class BlackArmor extends Armor
{
    public function reducePhysicalDamage(Attack $attack): int
    {
        return $attack->getDamage() / 4;
    }
}
