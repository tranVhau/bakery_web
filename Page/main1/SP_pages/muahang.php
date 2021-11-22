<?php
include("../../../../Web_project/admin/config/config.php");
global $mysqli;
session_start();

if (isset($_GET['id']) && isset($_SESSION['user'])) {
    $name = $_SESSION['user'];
    $sql_qr = "SELECT * from sanpham WHERE id_SP ='$_GET[id]'";
    $query_sl = $mysqli->query($sql_qr);
    $row = mysqli_fetch_array($query_sl);
    $sql = "INSERT INTO lsmuahang (username,maSP,tenSP,soluong,thanhtien) VALUES ('$name','$row[ma_SP]','$row[ten_SP]','1','$row[gia_SP]')";
    $mysqli->query($sql);
    echo '<script>  alert("Mua Hàng Thành Công"); </script>';
} else {
    echo '<script>  alert("Bạn phải đăng nhập để mua hàng"); </script>';
}
