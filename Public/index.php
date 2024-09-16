<?php

use Medine\HtmlNode;

require '../vendor/autoload.php';

$node = HtmlNode::textarea('Medine')
    ->name('content')
    ->id('contennido');


echo $node->render(); // <input name="first_name" type="text">