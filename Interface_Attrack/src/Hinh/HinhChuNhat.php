<?php
namespace Lam\InterfaceAttrack;
class HinhChuNhat implements HinhHocITF
{

    public function __construct(
        public int $rong,
        public int $dai,
    ){}

    public function S(){
        $s = $this->dai * $this->rong;  
    }
    public function P(){
        $s = ($this->dai + $this->rong) * 2;
    }
}