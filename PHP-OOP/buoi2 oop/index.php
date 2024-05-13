<?php

require_once 'student.php';
require_once './namespace/controllers/studentController.php';
use \buoi2\controllers\StudentController as S3; // namespace alias

$student = new \buoi2\Student('Namespace');
echo "<pre>";
print_r($student);

$student3 = new S3();
echo "<pre>";
print_r($student3);