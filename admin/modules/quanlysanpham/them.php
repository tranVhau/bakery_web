<div class="mainsub">
    <div class="main-content">
        <div class="mainsub-header">
            <h2>Thêm sản phẩm</h2>
        </div>
    <table>
    <form action="modules/quanlysanpham/xuly.php" method="POST" enctype="multipart/form-data">
        <tr>
            <td>Tên Sản Phẩm: </td>
            <td><input type="text" name="tenSP"></td>
        </tr>
        <tr>
            <td>Mã Sản Phẩm: </td>
            <td><input type="text" name="maSP"></td>
        </tr>
        <tr>
            <td>Giá: </td>
            <td><input type="text" name="giaSP"></td>
        </tr>
        <tr>
            <td>Số Lượng: </td>
            <td><input type="text" name="sluongSP"></td>
        </tr>
        <tr>
            <td>Hình Ảnh:  </td>
            <td><input type="file" name="haSP"></td>
        </tr>
        <tr>
            <td>Mô Tả: </td>
            <td>
                <textarea name="motaSP" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td>Loại: </td>
            <td>
                <select class="select" name="loaiSP" id="input" class="form-control" required="required">
                    <option value="1">Bánh Mì</option>
                    <option value="2">Bánh Kem</option>
                    <option value="3">Cà Phê</option>
                    <option value="4">Trà Sữa</option>
                    <option value="5">Cocktail</option>
                </select>
            </td>
        </tr>
        <div class="input">
            <input type="submit" name="themsanpham" value="Thêm Sản Phẩm">
        </div>
        
    </form>

</table>
    </div>
</div>
