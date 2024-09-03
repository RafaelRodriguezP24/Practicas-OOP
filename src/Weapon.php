<?php

namespace Medine;

abstract class Weapon
{
    protected int $damage = 0;
    protected bool $magical = false;
    public function createAttack(): Attack
    {
        return new Attack($this->damage, $this->magical, $this->getDescriptionKey());
    }

    protected function getDescriptionKey(): string
    {
        return str_replace('Medine\Weapons\\', '', get_class($this)) . 'Attack';
    }
}