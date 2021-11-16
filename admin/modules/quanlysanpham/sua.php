<?php
$sql_sua_sp = "SELECT * FROM sanpham WHERE id_SP = $_GET[idsanpham] LIMIT 1";
$query_sua_sp = $mysqli->query($sql_sua_sp);
?>
<p>Sửa Thông Tin Sản Phẩm</p>

<?php
while ($row = mysqli_fetch_array($query_sua_sp)) {
?>
    <table>
        <form action="modules/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_SP'] ?>" method="POST" enctype="multipart/form-data">
            <tr>
                <td>Tên Sản Phẩm</td>
                <td><input type="text" value="<?php echo $row['ten_SP'] ?>" name="tenSP"></td>
            </tr>
            <tr>
                <td>Mã Sản Phẩm</td>
                <td><input type="text" value="<?php echo $row['ma_SP'] ?>" name="maSP"></td>
            </tr>
            <tr>
                <TD>Giá</TD>
                <td><input type="text" value="<?php echo $row['gia_SP'] ?>" name="giaSP"></td>
            </tr>
            <tr>
                <TD>Số Lượng</TD>
                <td><input type="text" value="<?php echo $row['soLuong_SP'] ?>" name="sluongSP"></td>
            </tr>
            <tr>
                <TD>Hình Ảnh </TD>
                <td>
                    <input type="file" value="<?php echo $row['hinhAnh_SP'] ?>" name="haSP">
                    <img src="modules/quanlysanpham/uploads/<?php echo $row['hinhAnh_SP'] ?>" width="100px">
                </td>
                </td>
            </tr>
            <tr>
                <TD>Mô Tả</TD>
                <td>
                    <textarea name="motaSP" rows="5"><?php echo $row['mota_SP'] ?></textarea>
                </td>
            </tr>
            <tr>
                <td>Loại</td>
                <td>
                    <select name="loaiSP" id="input" class="form-control" required="required">
                        <?php
                        if ($row['id_danhmuc'] == 1) {
                        ?>
                            <option value="1" selected>Bánh Mì</option>
                            <option value="2">Bánh Kem</option>
                            <option value="3">Cà Phê</option>
                            <option value="4">Trà Sữa</option>
                            <option value="5">Cocktail</option>
                        <?php
                        } else if ($row['id_danhmuc'] == 2) {
                        ?>
                            <option value="1">Bánh Mì</option>
                            <option value="2" selected>Bánh Kem</option>
                            <option value="3">Cà Phê</option>
                            <option value="4">Trà Sữa</option>
                            <option value="5">Cocktail</option>
                        <?php
                        } else if ($row['id_danhmuc'] == 3) {
                        ?>
                            <option value="1">Bánh Mì</option>
                            <option value="2">Bánh Kem</option>
                            <option value="3" selected>Cà Phê</option>
                            <option value="4">Trà Sữa</option>
                            <option value="5">Cocktail</option>
                        <?php
                        } else if ($row['id_danhmuc'] == 4) {
                        ?>
                            <option value="1">Bánh Mì</option>
                            <option value="2">Bánh Kem</option>
                            <option value="3">Cà Phê</option>
                            <option value="4" selected>Trà Sữa</option>
                            <option value="5">Cocktail</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Bánh Mì</option>
                            <option value="2">Bánh Kem</option>
                            <option value="3">Cà Phê</option>
                            <option value="4">Trà Sữa</option>
                            <option value="5" selected>Cocktail</option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type="submit" name="sua" value="Sửa Sản Phẩm"></td>
            </tr>
        </form>
    <?php
}
    ?>
    </table>