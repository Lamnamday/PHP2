<?php

class Oto{
    private string $biMat;
    protected string $biMat1;
    public function __construct(
        public string $mauSon,
        public string $dongCo
    ){}

    public function showMauSon(){
        echo "Màu sơn: " . $this->mauSon . PHP_EOL;
    }

    public function setBiMat($value){
        $this->biMat = $value;
    }

    public function getBiMat(){
        return $this->biMat;
    }

    public function setBiMat1($value){
        $this->biMat1 = $value;
    }

    public function getBiMat1(){
        return $this->biMat1;
    }

    public function showDongCo(){
        echo "Động cơ: " . $this->dongCo . PHP_EOL;
    }
}

