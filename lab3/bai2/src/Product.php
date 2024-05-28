<?php

namespace Lam\Bai2;
echo "<pre>";
class Product{
    public function __construct(
        public int $id,
        public string $name,
        public int $price,
    ){}
    public function xemThongTin(){
        echo "==========THONG TIN=========" . PHP_EOL;
        echo 'ID: ' . $this->id . PHP_EOL;
        echo 'Tên: ' . $this->name . PHP_EOL;
        echo 'Giá: ' . $this->price . PHP_EOL;
    }
}