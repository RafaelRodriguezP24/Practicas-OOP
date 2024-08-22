<?php

namespace Medine;

abstract class Weapon
{
    protected int $damage = 0;

    public function getDamage(): int
    {
        return $this->damage;
    }

    abstract public function getMessages(Unit $attacker, Unit $opponent): string;
}