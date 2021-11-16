<?php
$sql_lietke_admin = "SELECT * FROM user WHERE user.level =0 ORDER BY id DESC";
$query_lietke_admin = $mysqli->query($sql_lietke_admin);
?>

<p>Danh Sách Tài Khoản Khách Hàng</p>

<table style="width: 100%;" border="1">
    <tr>
        <th>ID</th>
        <th> Tên Đăng Nhập </th>
        <th>Họ Tên</th>
        <th>Ngày Sinh</th>
        <th>Địa Chỉ </th>
        <th>Giới Tính</th>
        <th>Số ĐT </th>
        <th>email</th>
        <th>Thao Tác</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_admin)) {
        $i++;

    ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['username'] ?></td>
            <td><?php echo $row['fullname'] ?></td>
            <td> <?php echo $row['dateofbirth'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['sex'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['phonenumber'] ?></td>
            <td>
                <a href="modules/quanlytaikhoan/xuly.php?iduser=<?php echo $row['id'] ?>">Xóa</a>
                |
                <a href="?action=quanlytaikhoan&query=suatk&iduser=<?php echo $row['id'] ?>"> Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>