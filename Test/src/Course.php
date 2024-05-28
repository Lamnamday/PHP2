<?php

namespace Lam\Test;

use Lam\Test\Employee\Teacher;

class Course
{
    public function __construct(
        private string $course_id,
        private string $course_name,
        private Teacher $teacher
    ) {
    }
    public function getCourseName()
    {
        return $this->course_name;
    }
    public function getCourseCode()
    {
        return $this->course_id;
    }
    public function getTeacher()
    {
        return $this->teacher;
    }
    public function getDetail()
    {
        echo 'Name: ' . $this->course_name . PHP_EOL;
        echo 'Code: ' . $this->course_id . PHP_EOL;
        echo 'Teacher: ' . $this->teacher->getName() . PHP_EOL;
    }
}
