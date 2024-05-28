<?php

namespace Lam\Lab3;
echo "<pre>";
class Employee{
    public function __construct(
        public int $id,
        public string $name,
    ){}
    public function xemThongTin() {
        echo "==========THONG TIN=========" . PHP_EOL;
        echo 'ID: ' . $this->id . PHP_EOL;
        echo 'Tên: ' . $this->name . PHP_EOL;
    }
    
}