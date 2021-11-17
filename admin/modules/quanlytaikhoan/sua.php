<?php
$sql_sua_admin = "SELECT * FROM user WHERE id = $_GET[iduser] LIMIT 1";
$query_sua_admin = $mysqli->query($sql_sua_admin);
?>
<div class="mainsub">
    <div class="main-content" style="min-height: 100vh;">
        <div class="mainsub-header">
            <h2>Sửa thông tin sản phẩm</h2>
        </div>
<?php
while ($row = mysqli_fetch_array($query_sua_admin)) {
?>
    <table>
        <form action="modules/quanlytaikhoan/xuly.php?idadmin=<?php echo $row['id'] ?>" method="POST" enctype="multipart/form-data">
            <tr>
                <td>user name</td>
                <td><input type="text" value="<?php echo $row['username'] ?>" name="user_name"></td>
            </tr>
            <tr>
                <td>full name</td>
                <td><input type="text" value="<?php echo $row['fullname'] ?>" name="full_name"></td>
            </tr>
            <tr>
                <td>Ngày Sinh</td>
                <td><input type="date" value="<?php echo $row['dateofbirth'] ?>" name="NS"></td>
            </tr>
            <tr>
                <td>Giới Tính </td>
                <td><input type="text" value="<?php echo $row['sex'] ?>" name="GT"></td>
            </tr>
            <tr>
                <td>Địa Chỉ</td>
                <td><input type="text" value="<?php echo $row['address'] ?>" name="DC"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" value="<?php echo $row['email'] ?>" name="email"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" value="<?php echo $row['phonenumber'] ?>" name="phone_num"></td>
            </tr>
            <div class="input">
            <input type="submit" name="suatk" value="Sửa Thông Tin Tài Khoản">
            </div>
        </form>
    <?php
}
    ?>
    </table>
    </div>