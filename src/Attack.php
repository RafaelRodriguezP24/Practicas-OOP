<?php

namespace Medine;

class Attack
{
    protected int $damage;
    protected bool $magical;
    protected string $description;

    public function __construct(
        int $damage,
        bool $magical,
        string $description
    )
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
    }

    public function getDescription(Unit $attacker, Unit $opponent): string
    {
        return Translator::get($this->description, [
            'unit' => $attacker->getName(),
            'opponent' => $opponent->getName()
        ]);
    }

    public function getDamage(): int
    {
        return $this->damage;
    }

    public function isMagical(): bool
    {
        return $this->magical;
    }

    public function isPhysical(): bool
    {
        return !$this->magical;
    }
}
