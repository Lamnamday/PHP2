<?php

require './vendor/autoload.php';

use Lam\Test\Employee\Student;
use Lam\Test\Employee\Person;
use Lam\Test\Employee\Teacher;
use Lam\Test\Course;

echo "<pre>";

echo '<b>===========</b>' . PHP_EOL;


echo '<b>===========</b>' . PHP_EOL;
$tc1 = new Teacher("TongVanDuc", 30, "ductv44", 50000000);
$tc1->getInfo();

echo '<b>===========</b>' . PHP_EOL;
$course1 = new Course("C1", "PHP2", $tc1);
echo $course1->getDetail();

echo '<b>===========</b>' . PHP_EOL;
$sv1 = new Student('SV1', 20, 'PH46027', [$course1]);
$sv1->enrollCourse($course1);
$sv1->getInfo();

echo '<b>===========</b>' . PHP_EOL;