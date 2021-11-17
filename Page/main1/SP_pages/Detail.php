<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ======================Css========================= -->

  <link rel="stylesheet" href="../../../assets/css/Detail.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../../assets/css/grid.css" />
  <link rel="stylesheet" href="../../../assets/css/base.css" />
  <link rel="stylesheet" href="../../../assets/css/responsive.css" />

  <title>Chi Tiet San Pham</title>
</head>

<body>

  <div class="app">

    <?php
    include('../../../admin/config/config.php');
    if (isset($_GET['idsp'])) {
      $sql_qr = "SELECT * from sanpham, danhmuc WHERE sanpham.id_danhmuc = danhmuc.id && sanpham.id_SP ='$_GET[idsp]'";
      $query_dt = $mysqli->query($sql_qr);
      $rows = mysqli_fetch_array($query_dt);

      $status = ($rows['soLuong_SP']) ? "Còn Hàng" : "Hết Hàng";
    }

    ?>
    <div class="card-wrapper">
      <div class="card">
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img src="../../../assets/img/banner/milktea1.jpg" alt="shoe image">
              <img src="../../../assets/img/banner/milktea.jpg" alt="shoe image">
              <img src="../../../assets/img/banner/bakery1.jpg" alt="shoe image">
              <img src="../../../assets/img/banner/pancake2.png" alt="shoe image">
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
              <li>Phí Ship: <span>20K</span></li>
            </ul>
          </div>

          <div class="purchase-info">
            <input type="number" min="0" value="1">
            <button type="button" class="btn">
              Thêm Vào Giỏ Hàng <i class="fas fa-shopping-cart"></i>
            </button>
            <button type="button" class="btn">Mua Ngay<i class="fas fa-arrow-left"></i></button>
          </div>
        </div>
      </div>
    </div>

    <script language="javascript" src="../../../assets/js/Detail.js"></script>

</body>

</html>