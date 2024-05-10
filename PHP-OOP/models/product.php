<?php
function productAll()
{
    try {
        $sql = 'SELECT * FROM products ORDER BY id DESC';
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}