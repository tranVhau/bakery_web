<?php
$sql_lietke_phanhoi = "SELECT * FROM phanhoi ORDER BY id DESC";
$query_lietke_phanhoi = $mysqli->query($sql_lietke_phanhoi);
?>

<p>Danh Sách Phản Hồi Khách Hàng</p>

<table style="width: 100%;" border="1">
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