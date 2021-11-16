<?php
$sql_lietke_sp = "SELECT * FROM sanpham ORDER BY id_SP DESC";
$query_lietke_sp = $mysqli->query($sql_lietke_sp);
?>

<p>Tất Cả Sản Phẩm</p>

<table style="width: 100%;" border="1">
    <tr>
        <th>ID</th>
        <th> Mã </th>
        <th>Tên</th>
        <th>Giá </th>
        <th>Số Lượng </th>
        <th>Hình Ảnh </th>
        <th>Mô Tả</th>
        <th>Thao Tác</th>
    </tr>
    <?php
    $i = 0;
    while ($row = mysqli_fetch_array($query_lietke_sp)) {
        $i++;

    ?>
        <tr>

            <td><?php echo $row['id_SP'] ?></td>
            <td><?php echo $row['ma_SP'] ?></td>
            <td><?php echo $row['ten_SP'] ?></td>
            <td> <?php echo $row['gia_SP'] ?></td>
            <td><?php echo $row['soLuong_SP'] ?></td>
            <td> <img src="modules/quanlysanpham/uploads/<?php echo $row['hinhAnh_SP'] ?>" width="100px"> </td>
            <td><?php echo $row['mota_SP'] ?></td>
            <td>
                <a href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_SP'] ?>">Xóa</a>
                |
                <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_SP'] ?>"> Sửa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>