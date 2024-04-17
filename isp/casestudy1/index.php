<?php

require_once('Square.php');
require_once('Cube.php');

$square = new Square(5);
echo "Luas persegi: " . $square->calculateArea() . "<br/>";

$cube = new Cube(8);
echo "Luas permukaan kubus: " . $cube->calculateArea() . "<br/>";
echo "Volume kubus: " . $cube->calculateVolume() . "<br/>";
