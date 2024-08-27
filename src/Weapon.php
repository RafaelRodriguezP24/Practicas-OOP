<?php

namespace Medine;

abstract class Weapon
{
    protected int $damage = 0;
    protected bool $magical = false;
    protected string $description = ':unit ataca a :opponent';

    public function createAttack(): Attack
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }
}