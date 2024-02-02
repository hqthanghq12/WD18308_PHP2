<?php
// khai class truu tuong
abstract class DongVat{
    // 1 class duoc goi là class truu tuong
    // la co chua phuong thuc truu tuong
    // class truu tuong van co thuoc tinh va phuong thuc
    // nhung nhung class bth
    // class tt khong the khoi tao

    // khai bao phuong thuc truu tuong
    abstract public function di();
}
class ConNguoi extends DongVat{
    public function di()
    {
       echo "Di kieu minh thich";
    }
}