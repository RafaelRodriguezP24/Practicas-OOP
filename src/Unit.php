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
        $this->armor = new Armors\MissingArmor();
    }

    public static function createSoldier($name): Unit
    {
        $soldier = new Unit($name, new Weapons\BasicSword());
        $soldier->setArmor(new Armors\SilverArmor());
        return $soldier;
    }

    public function setWeapon(Weapon $weapon): Unit
    {
        $this->weapon = $weapon;

        return $this;
    }
    public function move(): void
    {
        echo $this->name . ' is moving to the battlefield ';
    }
    public  function attack(unit $opponent): void
    {
        $attack = $this->weapon->createAttack();

        Log::info($attack->getDescription($this, $opponent));

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

        $damage = $this->armor->reduceDamage($attack);
        if ($damage == 0) {
            Log::info("{$this->name} ha logrado esquivar el ataque");
        }

        $this->hp -= $damage;

        Log::info("{$this->name} ha recibido {$damage} puntos de daño");

        if($this->hp <= 0){
            $this->die();
        }else{
            Log::info("{$this->name} tiene {$this->hp} puntos de vida");
        }
        return $this->hp;
    }
    public function getName(): string
    {
        return $this->name;
    }
    private function die(): void
    {
        Log::info("{$this->name} ha muerto");
        exit();
    }

    public function setArmor(Armor $armor = null): Unit
    {
        $this->armor = $armor;

        return $this;
    }

    public function setShild(): Unit
    {
        return $this;
    }

}
