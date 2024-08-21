<?php

namespace Medine\Armors;

interface Armor
{
    public function reduceDamage($damage): int;
}
