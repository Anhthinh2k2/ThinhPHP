<?php 

// include tệp kết nối với mysql và databse
include("Bai1.php");

// Lấy thông tin từ form gán vào biến của mình đã tạo
$adminName = $_POST['adminname'];
$password = $_POST['password'];



// thực hiện truy vấn vào bảng để ktra tài khoản

$sql = " Select * from admins where adminname = '$adminName' and password = '$password'";
// $sql = "select * from admins";
$result = $conn -> query($sql);

if($conn -> errno){

    echo "No connect: " . $conn -> errno;
    die();
}


if ($result -> num_rows > 0) {
    // Đăng nhập thành công
    echo "Đăng nhập thành công!";
    

}else{
    //Đăng nhập thất bại
    echo "Đăng nhập thất bại!!!". "<br>" . "Vui lòng kiểm tra lại thông tin tài khoản!!!!";
}


//Đóng kết nối
$conn -> close();

?>