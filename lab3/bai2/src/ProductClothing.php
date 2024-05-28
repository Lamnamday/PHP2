<?php

namespace Lam\Bai2;
 
class ProductClothing extends Product{

    protected $size;
    
    public function __construct($id, $name, $price, $size) {
        parent::__construct($id, $name, $price);
        $this->size = $size;
    }
    public function xemThongTin() {
        parent::xemThongTin();
        echo "Size: {$this->size}";
    }
}
