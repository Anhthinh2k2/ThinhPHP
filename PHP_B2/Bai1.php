<?php 
    // Connect với mysql trên xampp
    $severname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'shopcosmetics';

    // Tạo kết nối
    $conn = new  mysqli($severname, $username, $password, $database);
    
    // Kiểm tra kết nối
    if($conn -> connect_errno) {
        die('Could not connect:  '.$conn -> connect_errno);
    }
       echo'Connected successfuly'. "<br>";

?>