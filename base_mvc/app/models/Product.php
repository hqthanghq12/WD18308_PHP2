<?php
namespace App\Models;
class Product extends  BaseModel {
    protected $table = "products";
//    public function __construct()
//    {
//        echo "Mồng 6 khai xuân";
//    }
// Hien thi du lieu trong bang
    public function getProduct(){
        $sql = "SELECT * FROM $this->table";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function addProduct($id, $name, $price){
        $sql = "INSERT INTO $this->table VALUES (?,?,?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $price]);
    }
}