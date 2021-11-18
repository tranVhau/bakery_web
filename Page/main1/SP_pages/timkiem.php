<?php
if (isset($_POST['key_word'])) {
    $tukhoa = $_POST['key_word'];
    $sql = "SELECT * FROM sanpham,danhmuc WHERE sanpham.id_danhmuc = danhmuc.id AND sanpham.ten_SP LIKE '%$tukhoa%'.%";
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
                            <a href="../../../../Web_Project/Page/main1/SP_pages/Detail.php?idsp=<?php echo $row_sp['id_SP'] ?> " target="_blank">
                                <div class=" cardsub">
                                    <img class="img" src="../../admin/modules/quanlysanpham/uploads/<?php echo $row_sp['hinhAnh_SP'] ?>" " alt="">
                                    <div class=" cardsub-id">
                                    <h4> <?php echo $row_sp['ten_SP'] ?> </h4> <br><br>
                                    <p class="price"><?php echo "Giá: " . $row_sp['gia_SP'] . " VND" ?> </p>
                                </div>
                                <p><a href="../../../../Web_Project/Page/main1/SP_pages/Detail.php?idsp=<?php echo $row_sp['id_SP'] ?>" target="_blank"><button><i class="style-main fas fa-shopping-cart"></i> Mua Ngay</button></a></p>
                        </div>
                        </a>
                    </div>
            </div>
        <?php
                }
        ?>
        </div>