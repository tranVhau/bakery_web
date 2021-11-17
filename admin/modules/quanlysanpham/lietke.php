<?php
$sql_lietke_sp = "SELECT * FROM sanpham ORDER BY id_SP DESC";
$query_lietke_sp = $mysqli->query($sql_lietke_sp);
?>
<div class="mainsub">
    <div class="mainsub-header">
        <h2>Tất cả sản phẩm</h2>
    </div>
 <div class="table-content">
<table>
    <thead>
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
    </thead>
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
               <div class="edit">
                   <div class="btn-edit">
                       <a class="btn-D" href="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_SP'] ?>">Xóa</a>
                   </div>
                   <div class="btn-edit">
                       <a class="btn-E" href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_SP'] ?>"> Sửa</a>
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