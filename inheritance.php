<?php
abstract class Unit{
    protected string $name;
    protected int $hp = 100;
    public function __construct($name, Armor $armor = null){
        $this->name = $name;
    }
    public function move(): void
    {
        echo $this->name . ' is moving to the battlefield ';
    }
    public  function attack(unit $opponent){

    }
    public function getHp(): int
    {
        return $this->hp;
    }
    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }
    public function takeDamage($damage): int
    {
        if($this->armor != null){
            $damage = $this->armor->reduceDamage($damage);
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

    public function reduceDamage($damage): int
    {
        return $damage;
    }

    public function setArmor(Armor $armor = null): void
    {
        $this->armor = $armor;
    }

}
class Soldier extends unit{
    protected int $damage = 40;
    protected Armor $armor;
    public function __construct($name, Armor $armor = null){
        parent::__construct($name);
        parent::setArmor($armor);
    }

    public function attack(unit $opponent): void
    {
        show("{$this->name} ataca con la espada a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }
}
interface Armor
{
    public function reduceDamage($damage): int;
}
class SilverArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        return $damage / 2;
    }
}
class GoldArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        return $damage / 3;
    }
}
class BlackArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        return $damage / 4;
    }
}
class ArcherArmor implements Armor
{
    public function reduceDamage($damage): int
    {
        if (rand(0, 1)) {
            return $damage;
        }else{
            return $damage = 0;
        }
    }
}
class Archer extends unit{
    protected int $damage = 20;
    protected Armor $armor;
    public function __construct($name, Armor $armor = null){
        parent::__construct($name);
        parent::setArmor($armor);
    }
    public function attack(unit $opponent): void
    {
        show("{$this->name} dispara una flecha a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }
}

function show($message): void
{
    echo "<p>$message</p>";
}

$armor = new SilverArmor();
$armorArc = new ArcherArmor();

$robin = new Archer('Robin Hood', $armorArc);
$arturo = new Soldier('Arturo', $armor);

$robin->attack($arturo);
$arturo->attack($robin);
$arturo->attack($robin);
$arturo->attack($robin);
$arturo->attack($robin);


