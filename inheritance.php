<?php
abstract class Unit{
    protected string $name;
    protected int $hp = 100;

    public function __construct($name){
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
    }
}
class Soldier extends unit{
    protected int $damage = 40;
    protected string $armor;

    const  ARMOR_BLACK = 'black';
    const  ARMOR_SILVER = 'silver';
    const  ARMOR_GOLD = 'gold';

    /**
     * @throws Exception
     */
    public function __construct($name, $armor){
        parent::__construct($name);
        if (!in_array($armor, [
            self::ARMOR_BLACK,
            self::ARMOR_SILVER,
            self::ARMOR_GOLD
        ])) {
            throw new Exception("Armor type not valid");
        }
        $this->armor = $armor;
    }
    public function attack(unit $opponent): void
    {
        show("{$this->name} ataca con la espada a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }
    public function takeDamage($damage): int
    {
        $damage = $this->reduceDamage($damage);
        return parent::takeDamage($damage);
    }

    private function reduceDamage($damage): int
    {
        if ($this->armor === self::ARMOR_BLACK) {
            return $damage / 4;
        }
        if ($this->armor === self::ARMOR_SILVER) {
            return $damage / 2;
        }
        if ($this->armor === self::ARMOR_GOLD){
            return $damage / 3;
        }
        return $damage;
    }

}

class Archer extends unit{
    protected int $damage = 20;
    public function attack(unit $opponent): void
    {
        show("{$this->name} dispara una flecha a {$opponent->getName()}");

        $opponent->takeDamage($this->damage);
    }
    public function takeDamage($damage): int
    {
        if (rand(0, 1)) {
            return parent::takeDamage($damage);
        } else {
            show("{$this->name} ha logrado esquivar el ataque");
            return parent::takeDamage($damage = 0);
        }
    }
}

function show($message): void
{
    echo "<p>$message</p>";
}

$robin = new Archer('Robin Hood');
$arturo = new Soldier('Arturo', 'black');
$rafael = new Soldier('Rafael', 'silver');
$juan = new Soldier('Juan', 'gold');

$robin->attack($arturo);
$arturo->attack($robin);
$rafael->attack($robin);
$juan->attack($rafael);
$robin->attack($rafael);
$arturo->attack($juan);
