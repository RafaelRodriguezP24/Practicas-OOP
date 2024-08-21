<?php

namespace Medine;

require 'src/helpers.php';
require 'src/Unit.php';
require 'vendor/Armor.php';

spl_autoload_register(function($className){
    if(strpos($className, 'Medine\\') === 0){
         $className = str_replace('Medine\\', '', $className);
         if(file_exists("src/$className.php")){
              require "src/$className.php";
         }
    }
});

$armor = new SilverArmor();
$armorArc = new ArcherArmor();

$robin = new Archer('Robin Hood', $armorArc);
$arturo = new Soldier('Arturo', $armor);

$robin->attack($arturo);
$arturo->attack($robin);
$arturo->attack($robin);
$arturo->attack($robin);
$arturo->attack($robin);