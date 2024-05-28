<?php

namespace Lam\Lab123;
class Employee{
    public function __construct(
        protected string $hoTen,
        protected int $tuoi,
        protected string $diaChi,
        protected string $maNhanVien,
    ) {
    }

    public function xemThongTin() {
        echo "==========THONG TIN=========" . PHP_EOL;
        echo 'Họ tên: ' . $this->hoTen . PHP_EOL;
        echo 'Tuổi: ' . $this->tuoi . PHP_EOL;
        echo 'Địa chỉ: ' . $this->diaChi . PHP_EOL;
        echo 'Mã nhân viên: ' . $this->maNhanVien . PHP_EOL;
    }
    }
