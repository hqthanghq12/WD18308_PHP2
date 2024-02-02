<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
         public $product;

    public function __construct()
    {
        $this->product = new Product();
//        echo "Đây là 13 bài tập tết";
    }
    public function index(){
        $products = $this->product->getProduct();
//        var_dump($products);
//        die();
//        echo "tết tết";
        return $this->render('product.list', compact('products'));

    }
    public function addProduct(){
        return $this->render('product.add');
    }
    public function postProduct(){
        if (isset($_POST['gui'])){
            $error = [];
        // validate
            if(empty($_POST['name'])){
                $error[] = "Ban phai nhap ten";
            }
            if(empty($_POST['price'])){
                $error[] = "Ban phai nhap gia";
            }
            if(count($error)>= 1){
                flash('errors', $error, 'add-product');
            }else{
                  $check = $this->product->addProduct(null, $_POST['name'], $_POST['price']);
                  if ($check){
                      flash('success', "Them thanh cong", 'add-product');
                  }
            }


        }
    }
}