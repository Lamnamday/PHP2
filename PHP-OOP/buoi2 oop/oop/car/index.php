<?php

require_once 'Oto.php';
require_once 'Merc.php';

$merc1 = new Merc('Red', 'V12');
echo "<pre>";

// $merc1->showDongCo();
// $merc1->showMauSon();
// $merc1->laiNgang();
$merc1->setBiMat1('OKBaBy');
print_r($merc1);
echo $merc1->getBiMat1();