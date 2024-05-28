<?php

namespace Lam\Test;

class Teacher extends Person{
    private $idgv;
        private $luong;
        private $courses=[];
    public function __construct(string $name, int $age, $idgv, $luong){
        parent::__construct($name, $age);
        $this->luong = $luong;
        $this->idgv = $idgv;
    }
        public function getInfo(){
            return "Teacher: $this->name (ID: $this->idgv)";
        }
        public function addCourse($course){
            $this->courses[] = $course;
        }

}