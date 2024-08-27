<?php

namespace Medine\Weapons;

use Medine\Unit;
use Medine\Weapon;

class BasicBow extends Weapon
{
    protected int $damage = 20;
    protected string $description = ':unit dispara una flecha a :opponent';

}