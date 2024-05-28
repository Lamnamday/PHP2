<?php

namespace Lam\Lab123;

class EmployeeProduction extends Employee{
    public const LUONG_SAN_PHAM = 20000;

    public function __construct(
        $name,
        $tuoi,
        $diachi,
        $manv,
        public int $soSanPhamLamDuoc
    )
    {
        parent::__construct($name, $tuoi, $diachi, $manv);
    }
    public function tinhLuong(
    ){
        return $this->soSanPhamLamDuoc * self::LUONG_SAN_PHAM;
    }
    public function xemThongTin() {
        parent::xemThongTin();

        echo 'Lương: ' . $this->tinhLuong() . PHP_EOL;
    }
}
