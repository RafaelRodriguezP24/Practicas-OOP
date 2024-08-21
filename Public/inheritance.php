<?php

namespace Medine;

use Medine\Armors\ArcherArmor;
use Medine\Armors\SilverArmor;

require '../vendor/autoload.php';

require '../src/Unit.php';

$armor = new SilverArmor();
$armorArc = new ArcherArmor();

$robin = new Archer('Robin Hood', $armorArc);
$arturo = new Soldier('Arturo', $armor);

$robin->attack($arturo);
$arturo->attack($robin);
$arturo->attack($robin);
$arturo->attack($robin);
$arturo->attack($robin);