<?php
if (isset($_GET['id'])) {
    $sql_sp = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc = '$_GET[id]' ORDER BY id_SP DESC ";
    $query_sp = $mysqli->query($sql_sp);
} else {
    $sql_sp = "SELECT * FROM sanpham ORDER BY id_SP DESC ";
    $query_sp = $mysqli->query($sql_sp);
}
?>
<div id="main">
    <div class="title">
        <h1>Moonbakery's menu</h1>
    </div>
    <div id="card-area">

        <div id="card-area">
            <div class="khu" id="khu">
                <div class="icon-pr">
                    <img src="../../../assets/img/banner/bakery.png" alt="">
                </div>
                <?php
                while ($row_sp = mysqli_fetch_array($query_sp)) {
                ?>
                    <div class="cardedit">
                        <div class="card">
                            <a href="">
                                <div class="cardsub">
                                    <img class="img" src="../../admin/modules/quanlysanpham/uploads/<?php echo $row_sp['hinhAnh_SP'] ?>" " alt="">
                                    <div class=" cardsub-id">
                                    <h4> <?php echo $row_sp['ten_SP'] ?> </h4> <br><br>
                                    <p class="price"><?php echo "Giá: " . $row_sp['gia_SP'] . " VND" ?> </p>
                                </div>
                                <p><a href=""><button><i class="style-main fas fa-shopping-cart"></i> Mua Ngay</button></a></p>
                        </div>
                        </a>
                    </div>
            </div>
        <?php
                }
        ?>
        </div>
    </div>
</div>