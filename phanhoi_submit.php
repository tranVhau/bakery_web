<?php
include 'config.php';
if( isset($_POST['fullname_PH']) && $_POST["vande_PH"] != '' && $_POST["noidung_PH"] != '' )
{
    $fullname_PH = $_POST["fullname_PH"];
    $vande_PH = $_POST["vande_PH"];
    $noidung_PH = $_POST["noidung_PH"];

    // kết nối với database user
    $sql = "SELECT *FROM phanhoi WHERE fullname_PH='$fullname_PH' ";
    $old = mysqli_query($conn,$sql);
        // chèn thêm thông tin vào database
    $sql = "INSERT INTO phanhoi (fullname_PH,vande_PH,noidung_PH) VALUES ('$fullname_PH','$vande_PH','$noidung_PH') ";
    mysqli_query($conn,$sql);
    echo '<script> alert("Đã gửi đánh giá thành công, xin cảm ơn bài đánh giá của quý khách"); </script>'; 
    require_once("index.php");

    // echo "Đã gửi đánh giá thành công, xin cảm ơn bài đánh giá của quý khách";
    // gửi đánh giá xong thì chuyển về trang chủ
    // require_once 'index.php';       
}
else 
{
    echo '<script> alert("Gửi đánh giá không thành công, vui lòng nhập đủ thông tin"); </script>'; 
    // require_once("index.php");
    header('location:../../index.php ');
}

?>