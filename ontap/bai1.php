<?php
// Khai báo 1 mảng có 10 phần tử (Giá trị mỗi phần tử tự cho)
// Kiểm tra tất cả các giá trị của các phần tử nằm ở vị trí chẵn
// Nếu đúng là số nguyên tố thì in ra 
// Kiểm tra tất cả các giá trị của các phần tử nằm ở vị trí lẻ
// Nếu đúng là số chính phương thì in ra
// Mảng liên hợp
// Key là do người lập trình quyết định
// Khai báo mảng
$arrayLH = ["A"=>5, 5 => "B", "DD"=>6];
// Hiển thị mảng
//echo "<pre>";
//print_r($arrayLH);
//// duyệt mảng
//echo $arrayLH["A"];
// for chi có thể duyển mang tuần tự
// foreach sẽ duyệt được tất cả các mang
// Hàm
// Hàm dùng để đóng gọi 1 chức năng trong chương trình
// giúp code gon gàng và tái sử dụng
$a = 5;
// kiểm tra xem nó số chẵn hay số lẻ
//if($a % 2 == 0){
//    echo "Đây là cửa chẵn";
//}else{
//    echo "Đây là cửa lẻ";
//}
////$b = 6;
////if($b % 2 == 0){
////    echo "Đây là cửa chẵn";
////}else{
////    echo "Đây là cửa lẻ";
////}
// khai báo hàm
// Có trả về => hàm có chứa retunr
// Không trả về => hàm không có chứa retunr
function ktChanLe($a){
//    Hàm the nào là hông có tham số
//    La hàm trong () không có chưa 1 biến nào
//    Nếu có chua thì đó là hàm có tham số và biến đó được gọi tham số
    // Hàm có thể cos bao tham số
    // 1 hàm có thể có vô số tham số miến sao mỗi tham số cách nhau
    // bằng 1 dấu ,
    if($a % 2 == 0){
        echo "Đây là cửa chẵn";
    }else{
        echo "Đây là cửa lẻ";
    }
}
// Gọi hàm
// Hàm không có trả về
// Gọi thẳng ra
//ktChanLe();
// Hàm có trả về
// Khi gọi thi phải có 1 biến để chứa giá trị hoặc phải sử dụng
// ngày lập tức
// nếu hàm có tham số thi khi gọi hàm cần chuyền vào bấy nhiêu tham soo
// Xây dựng 1 hàm không trả về và có nhưng tham số sau
// ten, Ngaysinh, gioi tinh, Đia chỉ, SCMT, SDT
// hiện thị nhưng thong tin sau
// ten, tuổi, gioi tinh, Đia chỉ, SCMT, SDT
// Dua ra ket luan nguoi do du tuoi dang ky ket hon hay không
// Lưu ý: Dựa trên pháp luật hiện hành

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
