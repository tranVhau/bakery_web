<?php
$sql_lietke_phanhoi = "SELECT * FROM phanhoi ORDER BY id_PH DESC";
$query_lietke_phanhoi = $mysqli->query($sql_lietke_phanhoi);
?>
<div class="mainsub">
    <div class="mainsub-header">
        <h2>Danh sách phản hồi khách hàng</h2>
    </div>
    <div class="user-acc">
        <table>
            <tr>
                <th>Vấn Đề Phản Hồi</th>
                <th> Nội Dung Phản Hồi </th>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($query_lietke_phanhoi)) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $row['vande_PH'] ?></td>
                    <td><?php echo $row['noidung_PH'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</div>