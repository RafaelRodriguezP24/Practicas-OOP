<?php

namespace Medine\Weapons;

use Medine\Unit;
use Medine\Weapon;

class FireBow extends Weapon
{
    protected int $damage = 30;
    protected bool $magical = true;
    protected string $description = ':unit dispara una flecha de Fuego a :opponent';

}