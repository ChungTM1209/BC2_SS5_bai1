<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 25/01/2019
 * Time: 11:45
 */
include_once 'Cylinder.php';
$circle = new Circle(2, 'red');
$cylinder = new Cylinder(2, 'red', 2);
echo $circle . "<br>";
echo $cylinder;