<?php

namespace Lam\Test;

class Student extends Person{
    private $courses=[];
    private $idsv;
    public function __construct(
        string $name, 
        int $age,
        ){
            parent::__construct($name, $age);
        }
        public function getInfo(){
            return "Student: $this->name" . "ID: $this->idsv";
        }
        public function enrollCourse($course){
            $this->courses[] = $course;
        }
}