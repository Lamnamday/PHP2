<?php

namespace Lam\Bai3;

class SinhVien{
    public function __construct(
        public string $name,
        public string $maSV,
        public float $diem,
    ){}

    public function xepLoai() {
        if ($this->diem >= 9) {
            return 'Gioi';
        } elseif ($this->diem >= 8) {
            return 'Kha';
        } elseif ($this->diem >= 5) {
            return 'Trung Binh';
        } else {
            return 'Yeu';
        }
    }
    public function xemThongTin(){
        echo "==========THONG TIN=========" . PHP_EOL;
        echo 'ID: ' . $this->name . PHP_EOL;
        echo 'Tên: ' . $this->maSV . PHP_EOL;
        echo 'Giá: ' . $this->diem . PHP_EOL;
    }
}