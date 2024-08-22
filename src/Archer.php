<?php

namespace Medine;

use Medine\Weapons\Bow\Bow;

class Archer extends unit
{
    public function __construct($name, Bow $bow)
    {
        parent::__construct($name, $bow);
    }
}

