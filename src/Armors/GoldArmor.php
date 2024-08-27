<?php
namespace Medine\Armors;

use Medine\Attack;

class GoldArmor implements Armor
{
    public function reduceDamage(Attack $attack): int
    {
        return $attack->getDamage() / 3;
    }
}
