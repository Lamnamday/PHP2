<?php

require './vendor/autoload.php';

use Lam\Lab3\EmployeeBonus;
use Lam\Lab3\EmployeeManager;

$nv1 = new EmployeeManager(1, 'Lam', 240);
$nv1->xemThongTin();
$nv1 = new EmployeeBonus(1, 'Lam', 8);
$nv1->xemThongTin();