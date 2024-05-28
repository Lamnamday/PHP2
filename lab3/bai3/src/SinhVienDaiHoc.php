<?php

namespace Lam\Bai3;

class SinhVienDaiHoc extends SinhVien {
    protected $nganhHoc;
    
    public function __construct($name, $maSV, $diem, $nganhHoc) {
        parent::__construct($name, $maSV, $diem);
        $this->nganhHoc = $nganhHoc;
    }
    
    public function getChuyenNganh() {
        return $this->nganhHoc;
    }
    
    public function xepLoai() {
        if ($this->diem >= 9.5 && $this->nganhHoc == 'Công nghệ thông tin') {
            return 'Xuat sac';
        } else {
            return parent::xepLoai();
        }
    }
}