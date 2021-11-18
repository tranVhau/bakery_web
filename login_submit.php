<?php
// tạo 1 session để trước khi có thể truy cập file index phải đăng nhập thành công
include 'config.php';
session_start();
if( isset($_POST["submit"]) && $_POST["username"] != '' && $_POST["password"] != '' )
{
    // khai báo sử dụng session
    // session_start();
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password = md5($password);
    $sql = "SELECT *FROM user WHERE username='$username' AND password ='$password' ";
    $admin = "SELECT usename FROM user WHERE username = 'admin'";
    $capbac = "SELECT level FROM user WHERE username='$username'";
    $user = mysqli_query($conn,$sql);
    //echo $sql; exit();
    // session_start();
    // $_SESSION["user"] = $username;
    if( $username == 'admin' && $capbac > 0  ) //
    {
        echo '<script> alert("Chào mừng admin đến với trang quản lý"); </script>'; 
        header("location:./admin/index.php");
        // require_once './admin/index.php';
    }
    else if( mysqli_num_rows($user) > 0) 
    {        // //gán $_SESSION["user"] = $username;
        // echo '<script> alert("Chào mừng bạn đến với web bán bánh mì"); </script>';  
        $_SESSION['user'] = $username;
        header("location:index.php");
        // print_r($_SESSION);
        // require_once 'index.html';
    }
    else
    {
        echo '<script> alert("Bạn đã nhập sai username hoặc password !"); </script>'; 
        require_once 'login.php';
    }
}
else 
{
    header("location: login.php");
}

?>
