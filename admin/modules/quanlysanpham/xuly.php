
<?php
include('..//../config/config.php');
$tensp = $_POST['tenSP'];
$masp = $_POST['maSP'];
$giasp = $_POST['giaSP'];
$soluongsp = $_POST['sluongSP'];

$hinhanh = $_FILES['haSP']['name'];
$hinhanh_tmp = $_FILES['haSP']['tmp_name'];
$motasp = $_POST['motaSP'];
$loaisp = $_POST['loaiSP'];



if ($_POST['themsanpham']) {
    $sql_them = "INSERT INTO sanpham (ten_SP,ma_SP,gia_SP,soLuong_SP,hinhAnh_SP,mota_SP,id_danhmuc) 
    VALUES ('$tensp','$masp','$giasp','$soluongsp','$hinhanh','$motasp','$loaisp')";
    $mysqli->query($sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
    header('Location:../../index.php?action=quanlysanpham&query=themsp');
} else if (isset($_POST['sua'])) {

    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);
        $sql = "SELECT * FROM sanpham WHERE id_SP = $_GET[idsanpham] LIMIT 1 ";
        $query = $mysqli->query($sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('uploads/' . $row['hinhAnh_SP']);
        }
        $sql_update = "UPDATE sanpham SET ten_SP='$tensp',ma_SP='$masp',gia_SP='$giasp',soLuong_SP='$soluongsp',hinhAnh_SP='$hinhanh',mota_SP='$motasp',id_danhmuc='$loaisp' WHERE id_SP =$_GET[idsanpham]";
    } else {
        $sql_update = "UPDATE sanpham SET ten_SP='$tensp',ma_SP='$masp',gia_SP='$giasp',soLuong_SP='$soluongsp',mota_SP='$motasp',id_danhmuc='$loaisp' WHERE id_SP=$_GET[idsanpham]";
    }
    $mysqli->query($sql_update);
    header('Location:../../index.php?action=quanlysanpham&query=themsp');
} else {
    $id = $_GET['idsanpham'];
    $sql = "SELECT * FROM sanpham WHERE id_SP = $id LIMIT 1 ";
    $query = $mysqli->query($sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('uploads/' . $row['hinhAnh_SP']);
    }
    $sql_xoa_sp = "DELETE FROM sanpham WHERE id_SP = $id";
    $mysqli->query($sql_xoa_sp);
    header('Location:../../index.php?action=quanlysanpham&query=themsp');
}
?>