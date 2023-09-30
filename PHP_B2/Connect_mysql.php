<?php
// Include tệp kết nối
include("Bai1.php");

// Lấy thông tin từ form
$username = $_POST['username'];
$password = $_POST['password'];

// Thực hiện truy vấn kiểm tra tài khoản
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($conn->error) {
    echo "Lỗi MySQL: " . $conn->error;
    die();
}

if ($result->num_rows > 0) {
    // Đăng nhập thành công
    echo "Đăng nhập thành công!";
} else {
    // Đăng nhập thất bại
    echo "Đăng nhập không thành công. Vui lòng kiểm tra lại thông tin đăng nhập.";
}

// Đóng kết nối
$conn->close();
?>
