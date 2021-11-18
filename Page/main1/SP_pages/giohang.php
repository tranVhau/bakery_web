<?php
include('../../../../Web_Project/admin/config/config.php');
if (isset($_GET['id'])) {
    function existUser(string $user)
    {
        global $mysqli;
        $sql_exist_user = "SELECT * FROM giohang WHERE username =$user";
        $exist_query = $mysqli->query($sql_exist_user);
        $result = 0;
        while ($row = mysqli_fetch_array($exist_query)) {
            // if (isset($row['username'])) {
            //     return 1;
            // }
            echo $row['username'];
        }
    }
}
existUser('hahaha');
?>
<div>
    <table>
        <thead>
            <tr>
                <th>Mã SP</th>
                <th>Tên SP</th>
                <th>Số Lượng</th>
                <th>Giá</th>
                <th>Thao Tác</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>Xóa</td>
                <td>Mua</td>
            </tr>
        </tbody>
    </table>
</div>