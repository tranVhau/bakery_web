<?php
$sql_lietke_admin = "SELECT * FROM user WHERE user.level =0 ORDER BY id DESC";
$query_lietke_admin = $mysqli->query($sql_lietke_admin);
?>
<div class="mainsub">
    <div class="mainsub-header">
        <h2>Danh Sách Tài Khoản Khách Hàng</h2>
    </div>
 <div class="user-acc">
 <table>
    <tr>
        <th>ID</th>
        <th> Tên Đăng Nhập </th>
        <th>Họ Tên</th>
        <th>Ngày Sinh</th>
        <th>Địa Chỉ </th>
        <th>Giới Tính</th>
        <th>Email</th>
        <th>Số ĐT</th>
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
                <div class="edituser">
                   <div class="btn-edituser">
                       <a class="btn-D-user" href="modules/quanlytaikhoan/xuly.php?iduser=<?php echo $row['id'] ?>">Xóa</a>
                     </div>
                     <div class="btn-edituser">
                       <a class="btn-E-user"href="?action=quanlytaikhoan&query=suatk&iduser=<?php echo $row['id'] ?>"> Sửa</a>
                     </div>
                </div>
            </td>
        </tr>
    <?php
    }
    ?>
 </table>
 </div>
</div>