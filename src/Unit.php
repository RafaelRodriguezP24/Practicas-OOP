<?php

namespace Medine;

use Medine\Armors\Armor;

class Unit{
    protected string $name;
    protected int $hp = 100;
    protected Armor $armor;
    protected Weapon $weapon;
    public function __construct($name, Weapon $weapon ) {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }
    public function move(): void
    {
        echo $this->name . ' is moving to the battlefield ';
    }
    public  function attack(unit $opponent): void
    {
        $attack = $this->weapon->createAttack();

        show($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }
    public function getHp(): int
    {
        return $this->hp;
    }
    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }
    public function takeDamage(Attack $attack): int
    {
        if($this->armor != null){
            $damage = $this->armor->reduceDamage($attack);
            if ($damage == 0) {
                show("{$this->name} ha logrado esquivar el ataque");
            }
        }
        $this->hp -= $damage;

        show("{$this->name} ha recibido {$damage} puntos de daño");

        if($this->hp <= 0){
            $this->die();
        }else{
            show("{$this->name} tiene {$this->hp} puntos de vida");
        }
        return $this->hp;
    }
    public function getName(): string
    {
        return $this->name;
    }
    private function die(): void
    {
        show("{$this->name} ha muerto");
        exit();
    }

    public function reduceDamage(Attack $attack): int
    {
        if ($this->armor) {
            return $this->armor->reduceDamage($attack);
        }
        return $attack->getDamage();
    }

    public function setArmor(Armor $armor = null): void
    {
        $this->armor = $armor;
    }

}
