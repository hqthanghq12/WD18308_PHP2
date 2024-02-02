<?php
interface DiChuyen{
    // interface k phai la class
    // vay nen se k co thuoc tinh va phuong thuc
    // nhu nhung class binh thuong
    // Ham trong interface duoc mac dinh la ham truu tuong
    function di();
}
class ConNguoi implements DiChuyen{
    public function di()
    {
        echo "Di di dung ve khi nha dang yen on";
    }
}
class OTo implements DiChuyen{
    public function di()
    {
        // TODO: Implement di() method.
        echo "di bang 4 banh";
    }
}