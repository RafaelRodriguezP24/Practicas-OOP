<?php

namespace Medine\Armors;

use Medine\Attack;
use Medine\Unit ;

interface Armor
{
    public function reduceDamage(Attack $attack): int;
}
