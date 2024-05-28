<?php

require './vendor/autoload.php';

use Lam\Test\Student;
use Lam\Test\Person;
use Lam\Test\Teacher;
use Lam\Test\Course;

echo "<pre>";
$course1 = new Course("c1", "PHP2", $sv1);
echo $course1->getDetail();

$sv1 = new Teacher("TongVanDuc", 30, "ductv44", 50000000);
$sv1->addCourse("PHP2");
$sv1->getInfo();

