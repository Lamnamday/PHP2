<?php

namespace Lam\Bai3;

class SinhVienCaoDang extends SinhVien {
    protected $khoaHoc;
    
    public function __construct($name, $maSV, $diem, $khoaHoc) {
        parent::__construct($name, $maSV, $diem);
        $this->khoaHoc = $khoaHoc;
    }
    
    public function getKhoaHoc() {
        return $this->khoaHoc;
    }
    
    public function xepLoai() {
        if ($this->diem >= 8.5 && $this->khoaHoc == 'Nhom nganh ky thuat') {
            return 'Gioi';
        } else {
            return parent::xepLoai();
        }
    }
}