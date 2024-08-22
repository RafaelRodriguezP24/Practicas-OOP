<?php

namespace Medine\Weapons\Bow;

use Medine\Unit;

class BasicBow extends Bow
{
    protected int $damage = 20;

    public function getMessages(Unit $attacker, Unit $opponent): string
    {
        return "{$attacker->getName()} dispara una flecha a {$opponent->getName()}";
    }
}