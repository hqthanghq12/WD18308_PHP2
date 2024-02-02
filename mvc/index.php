<?php
require_once "controllers/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url){
    case "/":
        $products = new ProductController();
        $products->listProduct();
//        echo "Day la trang chu";
        break;
    case "add-product":
        $products = new ProductController();
        $products->editProduct();
        break;
    default:
        echo "404";
        break;
}