
<?php
include('..//../config/config.php');
$username_ad = $_POST['user_name'];
$password_ad = $_POST['pass'];
$email_ad = $_POST['email'];
$phone_ad = $_POST['phone_num'];
$fullname_ad = $_POST['full_name'];
$diachi = $_POST['DC'];
$gioitinh = $_POST['GT'];
$ngaysinh = $_POST['NS'];



if ($_POST['themtk']) {
    $sql_themad = "INSERT INTO user (username, fullname,password,email,phonenumber) 
    VALUES ('$username_ad','$fullname_ad','$password_ad','$email_ad','$phone_ad')";
    $mysqli->query($sql_themad);

    header('Location:../../index.php?action=quanlytaikhoan&query=themtk');
} else if (isset($_POST['suatk'])) {
    $sql_update_ad = "UPDATE user SET username='$username_ad',fullname='$fullname_ad',password='$password_ad',email='$email_ad',phonenumber='$phone_ad', sex ='$gioitinh', address='$diachi', dateofbirth ='$ngaysinh' WHERE id=$_GET[idadmin]";
    $mysqli->query($sql_update_ad);
    header('Location:../../index.php?action=quanlytaikhoan&query=themtk');
} else {
    $id_ad = $_GET['iduser'];
    $sql_xoa_ad = "DELETE FROM user WHERE id = $id_ad";
    $mysqli->query($sql_xoa_ad);
    header('Location:../../index.php?action=quanlytaikhoan&query=themtk');
}
?>