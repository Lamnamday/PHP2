<?php
use Lam\Psr4Composer\Student;
require_once './vendor/autoload.php';


$student = new Student('Ahihi');
echo "<pre>";
print_r($student);