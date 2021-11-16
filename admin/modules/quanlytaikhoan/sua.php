<?php
$sql_sua_admin = "SELECT * FROM user WHERE id = $_GET[iduser] LIMIT 1";
$query_sua_admin = $mysqli->query($sql_sua_admin);
?>
<p>Sửa Thông Tin Tài Khoản </p>

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
                <TD>Ngày Sinh</TD>
                <td><input type="date" value="<?php echo $row['dateofbirth'] ?>" name="NS"></td>
            </tr>
            <tr>
                <TD>Giới Tính </TD>
                <td><input type="text" value="<?php echo $row['sex'] ?>" name="GT"></td>
            </tr>
            <tr>
                <TD>Địa Chỉ</TD>
                <td><input type="text" value="<?php echo $row['address'] ?>" name="DC"></td>
            </tr>
            <tr>
                <TD>Email</TD>
                <td><input type="text" value="<?php echo $row['email'] ?>" name="email"></td>
            </tr>
            <tr>
                <TD>Phone</TD>
                <td><input type="text" value="<?php echo $row['phonenumber'] ?>" name="phone_num"></td>
            </tr>
            <td><input type="submit" name="suatk" value="Sửa Thông Tin Tài Khoản"></td>
            </tr>
        </form>
    <?php
}
    ?>
    </table>