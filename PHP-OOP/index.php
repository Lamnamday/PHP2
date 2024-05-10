<?php

require_once './common/env.php';
require_once './common/function.php';
require_once './common/connect-db.php';

// require_once './controllers/HomeController.php';
// require_once './controllers/ProductController.php';
// require_once './models/product.php';


autoloadFile('./controllers/');
autoloadFile('./models/');

$act = $_GET['act'] ?? '/';
// debug($act);

match ($act) {
    '/' => home(),
    'product-list' => productList()
};

require_once './common/disconnet-db.php';


// home();
// productAll();
