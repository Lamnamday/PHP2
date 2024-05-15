<?php

class Car{
    public function __construct(
    public string $mauSon,
    public string $loaiXe,
    public string $tenXe
    ){

        echo '__construct đã thực thi' . PHP_EOL;

    }
    public function showName()
    {
        echo 'Name là: ' . $this->tenXe . PHP_EOL;
    }
    public function dichuyen() {
        echo $this->tenXe . ' đang di chuyển' . PHP_EOL;
    }

    public function __destruct(){
        echo "Destructed" . PHP_EOL;
    }
}

$cx5 = new Car('Đỏ', 'ô tô', 'CX-5');
echo "<pre>";
print_r($cx5);
$cx5->showName();
$cx5->dichuyen();

unset($cx5);

$cx80 = new Car('Trắng', 'ô tô', 'CX-80');
echo "<pre>";
print_r($cx80);
$cx80->showName();
$cx80->dichuyen();

unset($cx80);

$s680 = new Car('','','CX-80');
echo "<pre>";
print_r($s680);
$s680->showName();
$s680->dichuyen();