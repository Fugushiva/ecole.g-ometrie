<?php
include 'Forme.php';
include 'Disque.php';
include 'Triangle.php';
include 'Rectangle.php';
include 'Point.php';


//Impossible d'instancier
//$f1 = new Forme();

//var_dump($f1);

$disque = new Disque(50, new Point(9,5));
$triangle = new Triangle(8, 9, new Point(8, 12));
$rectangle = new Rectangle(20, 8, new Point(14, 12));




echo $triangle->computeMediane();




