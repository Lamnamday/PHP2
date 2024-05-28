<?php

require './vendor/autoload.php';

use Lam\Bai3\SinhVienCaoDang;
use Lam\Bai3\SinhVienDaiHoc;

$sv1 = new SinhVienDaiHoc('Nguyen Van A', 'SV001', 9.6, 'Công nghệ thông tin');
$sv1->
$sv2 = new SinhVienCaoDang('Tran Thi B', 'SV002', 8.7, 'Nhom nganh ky thuat');
echo $sinhVienCaoDang->getHoTen() . ', ' . 
$sinhVienCaoDang->getMaSinhVien() . ', ' . 
$sinhVienCaoDang->getDiemThi() . ', ' . 
$sinhVienCaoDang->xepLoai() . ', ' . 
$sinhVienCaoDang->getKhoaHoc();