<?php
// khai bao class NguoiLon
// co nhung thuoc tinh sau
// mat, mui, toc, mieng, longNach
// phuong thuc
// an() -> an bang mieng
// tho() -> bang phoi
// ngu() -> phong khach/ gam cau thang
// khai bao class TreCon
// co nhung thuoc tinh sau
// mat, mui, toc, mieng
// phuong thuc
// an() -> an bang mieng
// bo() -> bang tat ca
class ConNguoi{
    public $mat;
    public $mui;
    public $toc;
    public $mieng;
    public function __construct($mat, $mui, $mieng, $toc)
    {
        $this->mat = $mat;
        $this->mui = $mui;
        $this->mieng = $mieng;
        $this->toc = $toc;
    }
    public function __destruct()
    {
    }

    public function setMat($mat){
        $this->mat = $mat;
    }
    public function an(){
        echo "an bang mieng";
    }
}
class NguoiLon extends ConNguoi {
    // mat, mui, toc, mieng, longNach
    public $longNach;
    // an() -> an bang mieng
    // tho() -> bang phoi
    // ngu() -> phong khach/ gam cau thang
  public function __construct($mat, $mui, $mieng, $toc)
  {
      parent::__construct($mat, $mui, $mieng, $toc);
  }
  public function __destruct()
  {
      parent::__destruct();
  }

    public function tho(){
        echo $this->mui;
        $this->an();
        echo "bang phoi";
    }
    public function ngu(){
        echo "phong khach/ gam cau thang";
    }
}

class TreCon extends NguoiLon {
//    mat, mui, toc, mieng
// phuong thuc
// an() -> an bang mieng
// bo() -> bang tat ca
    public function bo(){
        echo $this->mat;
        echo $this->longNach;
        echo "bang tat ca";
    }

}
$ng = new NguoiLon();
$ng->setMat("1");
