<?php
$sql_bread = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc =1 ORDER BY id_SP DESC ";
$query_bread = $mysqli->query($sql_bread);

$sql_cake = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc = 2 ORDER BY id_SP DESC";
$query_cake = $mysqli->query($sql_cake);

$sql_cafe = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc = 3 ORDER BY id_SP DESC";
$query_cafe = $mysqli->query($sql_cafe);

$sql_milktea = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc = 4 ORDER BY id_SP DESC";
$query_milktea = $mysqli->query($sql_milktea);

$sql_cocktail = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc = 5 ORDER BY id_SP DESC";
$query_cocktail = $mysqli->query($sql_cocktail);

?>





<div id="main">
    <div class="title">
        <h1>Moonbakery's menu</h1>
    </div>
    <div id="card-area">


        <!-- Loại 1 -->
        <div id="card-area">
            <div class="khu" id="khu">
                <div class="icon-pr">
                    <a href="">
                        <img src="../../assets/img/banner/pancake.png" alt="">
                    </a>
                </div>
                <?php
                while ($row_bread = mysqli_fetch_array($query_bread)) {
                ?>
                    <div class="cardedit">
                        <div class="card">
                            <a href="">
                                <div class="cardsub">
                                    <img class="img" src="../../admin/modules/quanlysanpham/uploads/<?php echo $row_bread['hinhAnh_SP'] ?>" " alt="">
                                    <div class=" cardsub-id">
                                    <h4> <?php echo $row_bread['ten_SP'] ?> </h4> <br><br>
                                    <p class="price"><?php echo "Giá: " . $row_bread['gia_SP'] . " VND" ?> </p>
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

        <div id="linemune">
            <div id="linecard">
                <div id="line-in-line"></div>
            </div>
        </div>

        <!-- Loại 2 -->
        <div class="khu">
            <div class="icon-pr">
                <a href="">
                    <img src="../../assets/img/banner/bakery.png" alt="">
                </a>
            </div>

            <?php
            while ($row_cake = mysqli_fetch_array($query_cake)) {
            ?>
                <div class="cardedit">
                    <div class="card">
                        <a href="">
                            <div class="cardsub">
                                <img class="img" src="../../admin/modules/quanlysanpham/uploads/<?php echo $row_cake['hinhAnh_SP'] ?>" alt="">
                                <div class="cardsub-id">
                                    <h4> <?php echo $row_cake['ten_SP'] ?> </h4> <br><br>
                                    <p class="price"><?php echo "Giá: " . $row_cake['gia_SP'] . " VND" ?></p>
                                </div>
                                <p><a href=""><button><i class="style-main fas fa-shopping-cart"></i> Mua Ngay</button></a></p>
                            </div>
                        </a>
                    </div>
                </div>

            <?php
            }
            ?>

            <div id="linemune">
                <div id="linecard">
                    <div id="line-in-line"></div>
                </div>
            </div>
            <!-- loại 3 -->

            <div class="khu">
                <div class="icon-pr">
                    <a href="">
                        <img src="../../assets/img/banner/coffee-cup (1).png" alt="">
                    </a>
                </div>
                <?php
                while ($row_cafe = mysqli_fetch_array($query_cafe)) {
                ?>
                    <div class="cardedit">
                        <div class="card">
                            <a href="">
                                <div class="cardsub">
                                    <img class="img" src="../../admin/modules/quanlysanpham/uploads/<?php echo $row_cafe['hinhAnh_SP'] ?>" alt="">
                                    <div class="cardsub-id">
                                        <h4> <?php echo $row_cafe['ten_SP'] ?> </h4> <br><br>
                                        <p class="price"><?php echo "Giá: " . $row_cafe['gia_SP'] . " VND" ?></p>
                                    </div>
                                    <p><a href=""><button><i class="style-main fas fa-shopping-cart"></i> Mua Ngay</button></a></p>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php
                }
                ?>

                <div id="linemune">
                    <div id="linecard">
                        <div id="line-in-line"></div>
                    </div>
                </div>


                <!-- Loại 4 -->

                <div class="khu">
                    <div class="icon-pr">
                        <a href="">
                            <img src="../../assets/img/banner/cocktail.png" alt="">
                        </a>
                    </div>


                    <?php
                    while ($row_MT = mysqli_fetch_array($query_milktea)) {
                    ?>
                        <div class="cardedit">
                            <div class="card">
                                <a href="">
                                    <div class="cardsub">
                                        <img class="img" src="../../admin/modules/quanlysanpham/uploads/<?php echo $row_MT['hinhAnh_SP'] ?>" alt="">
                                        <div class="cardsub-id">
                                            <h4> <?php echo $row_MT['ten_SP'] ?> </h4> <br><br>
                                            <p class="price"><?php echo "Giá: " . $row_MT['gia_SP'] . " VND" ?></p>
                                        </div>
                                        <p><a href=""><button><i class="style-main fas fa-shopping-cart"></i> Mua Ngay</button></a></p>
                                    </div>
                                </a>
                            </div>
                        </div>

                    <?php
                    }
                    ?>

                    <div id="linemune">
                        <div id="linecard">
                            <div id="line-in-line"></div>
                        </div>
                    </div>

                    <!-- loại 5 -->


                    <div class="khu">
                        <div class="icon-pr">
                            <a href="">
                                <img src="../../assets/img/banner/bubble-tea.png" alt="">
                            </a>
                        </div>
                        <?php
                        while ($row_CT = mysqli_fetch_array($query_cocktail)) {
                        ?>
                            <div class="cardedit">
                                <div class="card">
                                    <a href="">
                                        <div class="cardsub">
                                            <img class="img" src="../../admin/modules/quanlysanpham/uploads/<?php echo $row_CT['hinhAnh_SP'] ?>" alt="">
                                            <div class="cardsub-id">
                                                <h4> <?php echo $row_CT['ten_SP'] ?> </h4> <br><br>
                                                <p class="price"><?php echo "Giá: " . $row_CT['gia_SP'] . " VND" ?></p>
                                            </div>
                                            <p><a href=""><button><i class="style-main fas fa-shopping-cart"></i> Mua Ngay</button></a></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        <?php
                        }
                        ?>

                        <div id="linemune">
                            <div id="linecard">
                                <div id="line-in-line"></div>
                            </div>
                        </div>
                    </div>
                </div>