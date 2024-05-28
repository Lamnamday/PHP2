<?php
 
namespace Lam\Lab3;


class EmployeeManager extends Employee{
    public const LƯƠNG_GIO = 25000;
    public function __construct(
        int $id, 
        string $name,
        private int $soGioLam,
        ){
            parent::__construct($id, $name);
        }
    public function caculateSalary(){
        return $this->soGioLam * self::LƯƠNG_GIO;
    }    
    public function xemThongTin() {
        parent::xemThongTin();

        echo 'Lương: ' . $this->caculateSalary() . PHP_EOL;
    }
}