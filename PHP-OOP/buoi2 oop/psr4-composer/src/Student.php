<?php

namespace Lam\Psr4Composer;
class Student
{
    // Hàm Construct
    public function __construct(
        public string $name,
        public int $age = 0,
        public int $mark = 0
    ) {
    }
    public function pay()
    {
        echo "Nộp tiền học phí" . PHP_EOL;
    }
    public function thamGiaHoatDongNgoaiKhoa($tenHoatDong)
    {
        echo "Tham gia hđ: " . $tenHoatDong . PHP_EOL;
    }
    public function showName()
    {
        echo 'Name là: ' . $this->name . PHP_EOL;
    }
    // Hàm destruct
    public function __destruct(){
        echo "Destructed" . PHP_EOL;
    }
}