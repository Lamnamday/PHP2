<?php
namespace Lam\Lab3;
use Lam\Lab3\Employee;

class EmployeeBonus extends Employee{
    public const LUONG_THUONG = 50000;
    public function __construct(
        $id,
        $name,
        public int $soGioOver
    )
    {
        parent::__construct($id, $name);
    }
    public function tinhLuong(
    ){
        return $this->soGioOver * self::LUONG_THUONG;
    }
    public function xemThongTin() {
        parent::xemThongTin();

        echo 'Lương thưởng: ' . $this->tinhLuong() . PHP_EOL;
    }
}