<?php

namespace Lam\InterfaceAttrack;

class HinhTamGiac implements HinhHocITF
{

    public function __construct(
        public int $duongCao,
        public int $day,
        public int $canhHuyen,
    ){}

    private function tinhNuaChuVi(){
        return ($this->duongCao + $this->day + $this->canhHuyen) / 2;
    }
    public function S(){
        $s = ($this->duongCao * $this->day) / 2;  
    }
    public function P(){
        $p = $this->duongCao + $this->day +$this->canhHuyen;
    }
}