<?php
namespace nsp;
class SinhVien {
    public $maSV;
    public $tenSV;
    public function __construct($maSV,$tenSV) {
        $this->maSV = $maSV;
        $this->tenSV = $tenSV;
    }
    public function hienThiThongTin() {
        echo "Mã sinh viên".$this->maSV."</br>";
        echo "Tên sinh vien".$this->tenSV;

    }
}