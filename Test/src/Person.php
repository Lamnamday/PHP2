<?php

namespace Lam\Test;

abstract class Person{
    public function __construct(
        public string $name,
        public int $age,
    ){
        $this->name = $name;
        $this->age = $age;
    }
    abstract function getInfo();
}