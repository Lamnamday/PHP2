<?php
function debug($data)
{
    echo "<pre>";
    print_r($data);
    die;
}
function autoloadFile($pathFolder)
{
    $files = array_diff(scandir($pathFolder), ['.', '..']);
    foreach ($files as $file) {
        //  debug($pathFolder . $file);
        require_once $pathFolder . $file;
    }

}
;


