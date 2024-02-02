<?php
include "nsp.php";
include "nsp1.php";
$sv = new nsp\SinhVien("Ph1234", "Trung dz");
$sv->hienThiThongTin();
$sv1 = new nsp1\SinhVien("Ph456", "Trung siêu dz");
$sv1->hienThiThongTin();
// namespace luôn luôn đc đặt ở đầu file php
// namespace

