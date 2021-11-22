  <!-- đặt điều kiện đăng nhập ms vô dc chi tiết-->
  <?php
  // include 'login_submit.php';
  include '../../../config.php';
  session_start();
  if (!isset($_SESSION['user'])) {
    // echo '<script> alert("Bạn phải đăng nhập mới vô được web"); </script>'; 
    echo '<script>  alert("Bạn phải đăng nhập trước khi mua hàng"); </script>';

    // require_once("sp_danhmuc.php");
    // print_r($_SESSION);
    // header("location:");
    // require_once("../MoonBakery/index.php");
    // header("location:../../index.php");  

  }

  ?>
  <!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ======================Css========================= -->

    <link rel="stylesheet" href="../../../../Web_Project/assets/css/Detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../../../Web_Project/assets/css/grid.css" />
    <link rel="stylesheet" href="../../../../Web_Project/assets/css/base.css" />
    <link rel="stylesheet" href="../../../../Web_Project/assets/css/responsive.css" />

    <title>Chi Tiet San Pham</title>
  </head>

  <body>

    <div class="app">

      <?php
      include('../../../../Web_Project/admin/config/config.php');
      if (isset($_GET['idsp'])) {
        $sql_qr = "SELECT * from sanpham, danhmuc WHERE sanpham.id_danhmuc = danhmuc.id && sanpham.id_SP ='$_GET[idsp]'";
        $query_dt = $mysqli->query($sql_qr);
        $rows = mysqli_fetch_array($query_dt);
        $status = ($rows['soLuong_SP'] != 0) ? "Còn Hàng" : "Hết Hàng";
      }
      ?>

      <div class="card-wrapper">
        <div class="card">
          <!-- card left -->
          <div class="product-imgs">
            <div class="img-display">
              <div class="img-showcase">
                <img src="../../../../Web_Project/admin/modules/quanlysanpham/uploads/<?php echo $rows['hinhAnh_SP'] ?>" alt="shoe image">
              </div>
            </div>

          </div>
          <!-- card right -->
          <div class="product-content">
            <h2 class="product-title"><?php echo $rows['ten_SP'] ?></h2>

            <div class="product-price">

              <p class="new-price">Giá: <span><?php echo $rows['gia_SP'] . ' Đ' ?></span></p>
            </div>

            <div class="product-detail">
              <h2>Thông Tin Sản Phẩm: </h2>
              <ul>
                <li>Mã Sản Phẩm: <span><?php echo $rows['ma_SP'] ?></span></li>
                <li>Tình Trạng: <span><?php echo $status ?></span></li>
                <li>Loại: <span><?php echo $rows['ten_Danhmuc'] ?></span></li>
              </ul>
            </div>

            <div class="purchase-info">
              <form action="">
                <!-- <input type="number" min="0" id="val"> -->

                <a href="../SP_pages/muahang.php?id=<?php echo $rows['id_SP'] ?>" class="btn">Mua Ngay</a>
              </form>
            </div>
            <div class="mota">
              <h2>Mô Tả:</h2>
              <p><?php echo $rows['mota_SP'] ?></p>
            </div>
          </div>
        </div>
      </div>
  </body>

  </html>