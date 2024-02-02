<?php
require_once "models/Product.php";
// Hàm xử lý từng chức năng
class ProductController{
   public function listProduct(){
       $product = new Product();
        $listProduct = $product->getAllProduct();
//        var_dump($listProduct);
//        die();
//    echo "Day la trang danh sach";
        include "views/product/list.php";
    }
    public function editProduct(){
        $product = new Product();
        $listProduct = $product->getOneProduct(1);
         var_dump($listProduct);
    }
}
