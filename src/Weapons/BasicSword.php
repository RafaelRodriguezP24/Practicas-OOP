<?php

namespace Medine\Weapons;

use Medine\Unit;
use Medine\Weapon;

class BasicSword extends Weapon
{
    protected int $damage = 40;

    public function getMessages(Unit $attacker, Unit $opponent): string
    {
        return "{$attacker->getName()} ataca con la espada a {$opponent->getName()}";
    }
}