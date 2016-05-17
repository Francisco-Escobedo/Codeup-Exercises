<?php

require_once 'Rectangle.php';
require_once 'Square.php';

// $rect1 = new Rectangle(10, 20);
// echo $rect1->area().PHP_EOL;

// $rect2 = new Rectangle(50, 20);
// echo $rect2->area().PHP_EOL;

$squa1 = new Square(6);
echo "Square Attributes".PHP_EOL;
echo $squa1->perimeter().PHP_EOL;
echo $squa1->area().PHP_EOL;

$rect1 = new Rectangle(5,20);
echo "Rectangle Attributes".PHP_EOL;
echo $rect1->perimeter().PHP_EOL;
echo $rect1->area().PHP_EOL;
