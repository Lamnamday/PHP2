<?php

namespace Lam\Test\Employee;

abstract class Person
{
    public function __construct(
        protected string $name,
        protected int $age,
    ) {
    }
    public function setName($values)
    {
        $this->name = $values;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setAge($values)
    {
        $this->age = $values;
    }
    public function getAge()
    {
       return $this->age;
    }
    abstract public function getInfo();
}
