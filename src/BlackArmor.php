<?php

namespace Medine;

use Flexio\Armor;
class BlackArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        return $damage / 4;
    }
}
