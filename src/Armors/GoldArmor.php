<?php
namespace Medine\Armors;

use Medine\Attack;

class GoldArmor extends Armor
{
    public function reducePhysicalDamage(Attack $attack): int
    {
        return $attack->getDamage() / 3;
    }
}
