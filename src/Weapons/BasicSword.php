<?php

namespace Medine\Weapons;

use Medine\Unit;
use Medine\Weapon;

class BasicSword extends Weapon
{
    protected int $damage = 40;
    protected string $description = ':unit ataca con la espada a :opponent';

}