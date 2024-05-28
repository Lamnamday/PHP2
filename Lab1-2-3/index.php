<?php 
require './vendor/autoload.php';

use Lam\Lab123\EmployeeProduction;
use Lam\Lab123\EmployeeOffice;


echo "<pre>";
$ep = new EmployeeProduction('A', 25, 'HN', 'A25', 52);
$ep->xemThongTin();

$ef = new EmployeeOffice('B', 25, 'HN', 'A25', 48);
$ef->xemThongTin();