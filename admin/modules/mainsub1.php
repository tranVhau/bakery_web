<?php
$sql_qr2 = "SELECT * FROM lsmuahang";
$query = $mysqli->query($sql_qr2);

$sql_qr3 = "SELECT * FROM lsmuahang";
$query1 = $mysqli->query($sql_qr3);


?>
<div class="detail">
    <!-- Chi tiết -->
    <div class="recentorders">
        <div class="cardheader">
            <h2>Đơn Hàng gần đây</h2>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Mã SP</th>
                    <th>Tên Hàng</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td><?php echo $row['maSP'] ?></td>
                        <td><?php echo $row['tenSP'] ?></td>
                        <td><?php echo $row['thanhtien'] ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Khách hàng gần đây -->
    <div class="recentcustomers">
        <div class="cardheader">
            <h2>Khách Hàng gần đây</h2>
        </div>
        <table>

            <?php
            while ($item = mysqli_fetch_array($query1)) {

            ?>
                <tr>
                    <td>
                        <h4><?php echo $item['username'] ?>
                    </td>
                </tr>
            <?php

            }
            ?>

        </table>
    </div>
</div>