<?php

class Merc extends Oto{

    public function laiNgang(){
        echo __FUNCTION__ . PHP_EOL;
    }

    public function showMauSon(){

        parent::showMauSon();

        echo "Sơn màu 50%" . PHP_EOL;   
        $this->biMat1;
    }
}