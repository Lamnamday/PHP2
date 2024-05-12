<?php

function productList()
{

    $data = productAll();
    // debug($data);
    require_once './views/product/list.php';
}