<?php

namespace Medine;

use Medine\Armors\ArcherArmor;
use Medine\Armors\SilverArmor;

require '../vendor/autoload.php';

require '../src/Unit.php';

$armor = new SilverArmor();
$armorArc = new ArcherArmor();

$robin = new Archer('Robin Hood', new Weapons\Bow\BasicBow());
$robin->setArmor($armorArc);
$arturo = new Soldier('Arturo', new Weapons\BasicSword());
$arturo->setArmor($armor);

$robin->attack($arturo);
$arturo->attack($robin);
$arturo->attack($robin);
$arturo->attack($robin);
$arturo->attack($robin);