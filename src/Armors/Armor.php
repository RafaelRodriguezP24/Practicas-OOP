<?php

namespace Medine\Armors;

use Medine\Unit ;

interface Armor
{
    public function reduceDamage($damage): int;
}
