<?php
$sql_banh = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id AND danhmuc.loai_sp =1 ORDER BY id_SP DESC LIMIT 4 ";
$query_banh = $mysqli->query($sql_banh);
$sql_nuoc = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id AND danhmuc.loai_sp = 2 ORDER BY id_SP DESC LIMIT 4 ";
$query_nuoc = $mysqli->query($sql_nuoc);
?>



<div class="title">
    <h1>Welcome to Moonbakery's menu</h1>
</div>
<div class="card-area">
    <div class="logomenu">
        <img src="./assets/img/banner/bread (1).png" alt="" class="img-responsive">
        <a href="../../Web_Project/Page/main1/index.php?id=6">Xem Tất Cả</a>
    </div>
    <div class="line-shop">
        <div class="line-min"></div>
    </div>
    <ul class="cards">

        <?php
        while ($row_banh = mysqli_fetch_array($query_banh)) {
        ?>
            <li>
                <a href="#" class="card">
                    <img src="admin/modules/quanlysanpham/uploads/<?php echo $row_banh['hinhAnh_SP'] ?>" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc">
                                <path />
                            </svg>
                            <img class="card__thumb" src="./assets/img/banner/pancake.png" alt="" />
                            <div class="card__header-text">
                                <h3 class="card__title"><?php echo $row_banh['ten_SP'] ?></h3>
                                <span class="card__status"><?php echo $row_banh['gia_SP'] ?></span>
                            </div>
                        </div>
                        <p class="card__description"><?php echo $row_banh['mota_SP'] ?></p>
                    </div>
                </a>
            </li>
        <?php
        }
        ?>

    </ul>
</div>

<div class="card-area">
    <div class="logomenu">
        <img src="./assets/img/banner/green-tea.png" alt="" class="img-responsive">
        <a href="../../Web_Project/Page/main1/index.php?id=6">Xem Tất Cả</a>
    </div>
    <div class="line-shop">
        <div class="line-min"></div>
    </div>
    <ul class="cards">
        <?php
        while ($row_nuoc = mysqli_fetch_array($query_nuoc)) {
        ?>
            <li>
                <a href="" class="card">
                    <img src="admin/modules/quanlysanpham//uploads/<?php echo $row_nuoc['hinhAnh_SP'] ?>" class="card__image" alt="" />
                    <div class="card__overlay">
                        <div class="card__header">
                            <svg class="card__arc">
                                <path />
                            </svg>
                            <img class="card__thumb" src="./assets/img/banner/coffee-cup (1).png" alt="" />
                            <div class="card__header-text">
                                <h3 class="card__title"><?php echo $row_nuoc['ten_SP'] ?></h3>
                                <span class="card__status"><?php echo $row_nuoc['gia_SP'] ?></span>
                            </div>
                        </div>
                        <p class="card__description"><?php echo $row_nuoc['mota_SP'] ?></p>
                    </div>
                </a>
            </li>
        <?php
        }
        ?>

    </ul>

</div>