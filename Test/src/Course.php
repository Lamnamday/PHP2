<?php 

namespace Lam\Test;

 
class Course{
    private $course_id;
private $course_name;
private $teacher;
    public function __construct(
        $course_id, $course_name, $teacher
    )
    {
        $this->course_id = $course_id;
        $this->course_name = $course_name;
        $this->teacher = $teacher;
    }
    public function getDetail(){
        return "Course Name: $this->course_name, 
                ID: $this->course_id, 
                Teacher: " . (($this->teacher instanceof Teacher) ? $this->teacher->getInfo() : "Unknown");
    }
}