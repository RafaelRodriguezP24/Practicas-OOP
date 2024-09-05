<?php

namespace Medine;

use Medine\Armors\ArcherArmor;
use Medine\Armors\BlackArmor;
use Medine\Armors\SilverArmor;

require '../vendor/autoload.php';

require '../src/Unit.php';

Translator::load([
    'BasicBowAttack' => ':unit dispara una flecha a :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'FireBowAttack' => ':unit dispara una flecha de fuego a :opponent'
]);

$armorArc = new ArcherArmor();

Log::setLogger(new HtmlLogger());

$arturo = Unit::createSoldier('Arturo')
    ->setArmor(new blackArmor())
    ->setWeapon(new Weapons\BasicSword())
    ->setShild();

$robin = new Unit('Robin Hood', new Weapons\FireBow());
$robin->setArmor($armorArc);


$robin->attack($arturo);
$arturo->attack($robin);
$robin->attack($arturo);
$arturo->attack($robin);
$robin->attack($arturo);
$arturo->attack($robin);
