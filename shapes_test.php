<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$rect1 = new Rectangle(10, 20);
echo $rect1->area().PHP_EOL;

$rect2 = new Rectangle(50, 20);
echo $rect2->area().PHP_EOL;

