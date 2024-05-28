<?php

require './vendor/autoload.php';

use Lam\Bai2\ProductClothing;
use Lam\Bai2\ProductElectronic;

$pr1 = new ProductClothing(1, 'Hihi', 100000, 5);
$pr1->xemThongTin();
$pr1 = new ProductElectronic(1, 'Hihi', 100000, 12);
$pr1->xemThongTin();