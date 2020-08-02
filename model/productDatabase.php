<?php
function getAllProduct()
{
    $sql = "Select * from products limit 9;";
    $products = $GLOBALS['db']->query($sql)->fetch_all();
    for($i=0;$i<count($products);$i++){
        $products[$i] = new Product($products[$i][0], $products[$i][1], $products[$i][2], $products[$i][3], $products[$i][4], $products[$i][5]);
    }
    return $products;
}
function getTui()
{
    $sql = "Select * from products where type = 2 limit 9;";
    $products = $GLOBALS['db']->query($sql)->fetch_all();
    for($i=0;$i<count($products);$i++){
        $products[$i] = new Product($products[$i][0], $products[$i][1], $products[$i][2], $products[$i][3], $products[$i][4], $products[$i][5]);
    }
    return $products;
}
function getVothong()
{
    $sql = "Select * from products where type = 1 limit 9;";
    $products = $GLOBALS['db']->query($sql)->fetch_all();
    for($i=0;$i<count($products);$i++){
        $products[$i] = new Product($products[$i][0], $products[$i][1], $products[$i][2], $products[$i][3], $products[$i][4], $products[$i][5]);
    }
    return $products;
}
function getChau()
{
    $sql = "Select * from products where type = 3 limit 9;";
    $products = $GLOBALS['db']->query($sql)->fetch_all();
    for($i=0;$i<count($products);$i++){
        $products[$i] = new Product($products[$i][0], $products[$i][1], $products[$i][2], $products[$i][3], $products[$i][4], $products[$i][5]);
    }
    return $products;
}
function getPhanbon()
{
    $sql = "Select * from products where type = 4 limit 9;";
    $products = $GLOBALS['db']->query($sql)->fetch_all();
    for($i=0;$i<count($products);$i++){
        $products[$i] = new Product($products[$i][0], $products[$i][1], $products[$i][2], $products[$i][3], $products[$i][4], $products[$i][5]);
    }
    return $products;
}
function getKhac()
{
    $sql = "Select * from products where type = 5 limit 9;";
    $products = $GLOBALS['db']->query($sql)->fetch_all();
    for($i=0;$i<count($products);$i++){
        $products[$i] = new Product($products[$i][0], $products[$i][1], $products[$i][2], $products[$i][3], $products[$i][4], $products[$i][5]);
    }
    return $products;
}
?>