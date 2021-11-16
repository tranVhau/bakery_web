<p>Thêm Sản Phẩm</p>


<table>
    <form action="modules/quanlysanpham/xuly.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td>Tên Sản Phẩm</td>
            <td><input type="text" name="tenSP"></td>
        </tr>
        <tr>
            <td>Mã Sản Phẩm</td>
            <td><input type="text" name="maSP"></td>
        </tr>
        <tr>
            <TD>Giá</TD>
            <td><input type="text" name="giaSP"></td>
        </tr>
        <tr>
            <TD>Số Lượng</TD>
            <td><input type="text" name="sluongSP"></td>
        </tr>
        <tr>
            <TD>Hình Ảnh </TD>
            <td><input type="file" name="haSP"></td>
        </tr>
        <tr>
            <TD>Mô Tả</TD>
            <td>
                <textarea name="motaSP" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td>Loại</td>
            <td>
                <select name="loaiSP" id="input" class="form-control" required="required">
                    <option value="1">Bánh Mì</option>
                    <option value="2">Bánh Kem</option>
                    <option value="3">Cà Phê</option>
                    <option value="4">Trà Sữa</option>
                    <option value="5">Cocktail</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="themsanpham" value="Thêm Sản Phẩm"></td>
        </tr>
    </form>

</table>