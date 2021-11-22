<?php
$sql_qr = "SELECT * FROM user WHERE level =0";
$sl_user = mysqli_num_rows($mysqli->query($sql_qr));

$sql_qr1 = "SELECT * FROM phanhoi";
$sl_report = mysqli_num_rows($mysqli->query($sql_qr1));

$sql_qr2 = "SELECT * FROM lsmuahang";
$sl_luotmua = mysqli_num_rows($mysqli->query($sql_qr2));

$cost = 0;
$a = $mysqli->query($sql_qr2);
while ($rows = mysqli_fetch_array($a)) {
  $cost += $rows['thanhtien'];
}
?>
<div class="mainsub">
  <div class="cardbox">
    <div class="card">
      <div>

        <div class="number"><?php echo $sl_user ?></div>
        <div class="cardname">Tổng User</div>
      </div>
      <div class="iconbx">
        <ion-icon name="eye-outline"></ion-icon>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="number"><?php echo $sl_luotmua ?></div>
        <div class="cardname">Tổng Đơn hàng</div>
      </div>
      <div class="iconbx">
        <ion-icon name="cart-outline"></ion-icon>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="number"><?php echo $sl_report ?></div>
        <div class="cardname">Phản hồi</div>
      </div>
      <div class="iconbx">
        <ion-icon name="chatbubble-outline"></ion-icon>
      </div>
    </div>

    <div class="card">
      <div>
        <div class="number"><?php echo $cost ?> VNĐ</div>
        <div class="cardname">Doanh thu</div>
      </div>
      <div class="iconbx">
        <ion-icon name="cash-outline"></ion-icon>
      </div>
    </div>
  </div>
</div>