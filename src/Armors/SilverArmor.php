<?php

namespace Medine\Armors;

class SilverArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        return $damage / 2;
    }
}
