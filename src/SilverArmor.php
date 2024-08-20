<?php

namespace Medine;

use Flexio\Armor;

class SilverArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        return $damage / 2;
    }
}
