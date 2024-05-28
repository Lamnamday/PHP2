<?php 

namespace Lam\Lab123;

class EmployeeOffice extends Employee
{
    public const LUONG_GIO = 25000;

    public function __construct(
        $hoTen,
        $tuoi,
        $diaChi,
        $maNhanVien,
        private int $soGioLam
    ) {
        parent::__construct($hoTen, $tuoi, $diaChi, $maNhanVien);
    }

    public function tinhLuong() {
        return $this->soGioLam * self::LUONG_GIO;
    }
    
    public function xemThongTin() {
        parent::xemThongTin();

        echo 'Lương: ' . $this->tinhLuong() . PHP_EOL;
    }
}