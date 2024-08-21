<?php

namespace Medine\Armors;

class BlackArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        return $damage / 4;
    }
}
