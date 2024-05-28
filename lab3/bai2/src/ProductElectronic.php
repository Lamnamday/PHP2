<?php

namespace Lam\Bai2;

class ProductElectronic extends Product{
   protected $warrantyPeriod;
    
    public function __construct($id, $name, $price, $warrantyPeriod) {
        parent::__construct($id, $name, $price);
        $this->warrantyPeriod = $warrantyPeriod;
    }
    public function xemThongTin() {
        parent::xemThongTin();
        echo "Thời gian bảo hành: {$this->warrantyPeriod} tháng";
    }
}