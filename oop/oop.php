<?php
class SinhVien{
//    Khai báo thuộc tính
// Khai báo thuộc tính năm sinh
    public $maSV;
    public $tenSV;
//    Khai báo phương thức
// Khai báo phương thức khởi tạo
    public function __construct($maSV, $tenSV)
    {
//        Class có bao nhiêu thuộc tính thì
//        PT khởi tạo sẽ có bấy nhiêu tham số
//        Tương ứng
        $this->maSV = $maSV;
        $this->tenSV = $tenSV;

    }
// Phương thức set
    public function setTen($tenSV){
        $this->tenSV = $tenSV;
    }
// Khai báo 1 phương thức tính tuổi (Không tham số, có trả về)
    public  function hienThiThongTin(){
        // nếu muốn sử dụng đến thuộc tính hay phương thức
        // Hay nhớ đến từ khóa $this
        echo $this->tenSV;
        echo $this->maSV;
    }
}
//  Khởi tạo 1 đối tượng
$sv = new SinhVien("PH123", "Nguyễn Thành Trung");
//$sv->maSV = "PH12345";
//$sv->setTen("Nguyễn Thành Trung");
$sv->hienThiThongTin();
