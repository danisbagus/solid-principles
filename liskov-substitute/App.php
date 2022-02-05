<?php

require_once("./Triangle.php");
require_once("./EquilateralTriangle.php");
require_once("./IsoscelesTriangle.php");

$triangle1 = new Triangle();
$triangle2 = new EquilateralTriangle();
$triangle3 = new IsoscelesTriangle();

$triangle1->setAlphaAngle(100);
$triangle1->setGammaAngle(80);
$triangle1->setBetaAngle(90);

$triangle2->setAngle(90);

$triangle3->setTopAngle(80);
$triangle3->setBottomAngle(50);


print_r("The biggest anggle off triangle 1 is " . $triangle1->getBiggestAngle());
print_r("\nThe biggest anggle off triangle 2 is " . $triangle2->getBiggestAngle());
print_r("\nThe biggest anggle off triangle 3 is " . $triangle3->getBiggestAngle());