<?php

require 'vendor/autoload.php';


use Lam\InterfaceAttrack\Bank\CheckingAccount;
use Lam\InterfaceAttrack\Bank\SavingsAccount;

echo "<pre>";

// $stg = new HinhTamGiac(3, 4, 5);
// echo 'Chu vi tam giác: ' . $stg->P()  . PHP_EOL;
// echo 'Diện tích tam giác: ' . $stg->S() . PHP_EOL;

// $shcn = new HinhChuNhat(6, 9);
// echo 'Chu vi hình chữ nhật: ' . $shcn->P();
// echo 'DIện tích hình chữ nhật: ' . $shcn->S();

$ca = new CheckingAccount();
$ca->withdraw();
$ca->getBalance();
$ca->showWithdrawAndBalance();

$sa = new SavingsAccount();
$sa->withdraw();
$sa->getBalance();
$sa->showWithdrawAndBalance();