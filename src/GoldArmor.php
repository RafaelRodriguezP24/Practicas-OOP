<?php
namespace Medine;

use Flexio\Armor;
class GoldArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        return $damage / 3;
    }
}
