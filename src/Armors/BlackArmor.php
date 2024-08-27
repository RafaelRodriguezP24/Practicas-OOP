<?php

namespace Medine\Armors;

use Medine\Attack;

class BlackArmor implements Armor
{
    public function reduceDamage(Attack $attack): int
    {
        return $attack->getDamage() / 4;
    }
}
