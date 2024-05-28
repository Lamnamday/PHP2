<?php

namespace Lam\Test\Employee;

class Teacher extends Person{
        
    public function __construct(
        string $name, 
        int $age, 
        private string $idgv, 
        private int $luong,
        private array $courses=[]
        ){
        parent::__construct($name, $age);
    }
        public function getInfo(){
            echo 'Name: ' . $this->name . PHP_EOL;
            echo 'Age: ' . $this->age . PHP_EOL;
            echo 'Salary: ' . $this->luong . PHP_EOL;
            echo 'ID Teacher: ' . $this->idgv . PHP_EOL;

            echo '<ul>';
            foreach ($this->courses as $course) {
                echo '<li>';
                $course->getDetail();
                echo '</li>';
            }
            echo '</ul>';
        }
        public function addCourse($course){
            $this->courses[] = $course;
        }

}