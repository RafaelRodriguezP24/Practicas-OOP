<?php
namespace Medine\Armors;

class GoldArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        return $damage / 3;
    }
}
