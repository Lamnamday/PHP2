<?php

require_once 'student.php';
require_once './namespace/controllers/studentController.php';
use \buoi2\controllers\StudentController as S3; // namespace alias

$student4 = new \buoi2\Student('Namespace', 20);
echo "<pre>";
print_r($student4);
$student4->showName();

unset($student4);

$student3 = new \buoi2\Student('Ahihi', 19, 50);
echo "<pre>";
print_r($student3);