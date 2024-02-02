<?php
require_once "db.php";
// Hàm xử lý thao tac hoặc truy vấn
class Product extends db{
    public function getAllProduct(){
        $sql = "SELECT * FROM products;";
        return $this->getData($sql);
    }
    public function getOneProduct($id){
        $sql = "SELECT * FROM products WHERE id =".$id;
        return $this->getData($sql, false);
    }
}
