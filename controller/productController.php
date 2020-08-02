<?php
session_start();
require 'connection.php';
require 'model/product.php';
require 'model/productDatabase.php';

$products= getAllProduct();
if (isset($_SESSION['search'])){
    if($_SESSION['search']=="vothong"){
        $products=getVothong();
    }else if($_SESSION['search']=="tui"){
        $products=getTui();
    }else if($_SESSION['search']=="chau"){
        $products=getChau();
    }else if($_SESSION['search']=="phanbon"){
        $products=getPhanbon();
    }else if($_SESSION['search']=="khac"){
        $products=getKhac();
    }else {
        $products= getAllProduct();
    }
}
if(isset($_POST['vothong'])){
    $_SESSION['search']="vothong";
    header("Location: index.php");
}
if(isset($_POST['tui'])){
    $_SESSION['search']="tui";
    header("Location: index.php");
}
if(isset($_POST['chau'])){
    $_SESSION['search']="chau";
    header("Location: index.php");
}
if(isset($_POST['phanbon'])){
    $_SESSION['search']="phanbon";
    header("Location: index.php");
}
if(isset($_POST['all'])){
    $_SESSION['search']="all";
    header("Location: index.php");
}
if(isset($_POST['khac'])){
    $_SESSION['search']="khac";
    header("Location: index.php");
}
?>