<?php

namespace Lam\Test\Employee;

class Student extends Person{
    public function __construct(
        string $name, 
        int $age,
        private string $idsv,
        private array $courses=[]
    
        ){
            parent::__construct($name, $age);
        }
        public function getInfo(){
            echo 'Name: ' . $this->name . PHP_EOL;
            echo 'Age: ' . $this->age . PHP_EOL;
            echo 'ID: ' . $this->idsv . PHP_EOL;

            echo '<ul>';
            foreach ($this->courses as $course) {
                echo '<li>';
                $course->getDetail();
                echo '</li>';
            }
            echo '</ul>';
        }
        public function enrollCourse($course){
            $this->courses[] = $course;
        }
}