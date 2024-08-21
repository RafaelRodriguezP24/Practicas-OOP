<?php

namespace Medine\Armors;

class ArcherArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        if (rand(0, 1)) {
            return $damage;
        }else{
            return $damage = 0;
        }
    }
}
