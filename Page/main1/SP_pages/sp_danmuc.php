<?php
$query_sp = null;
function getQuery()
{

    global $mysqli;
    if (isset($_GET['pages'])) {
        $pages = $_GET['pages'];
    } else {
        $pages = 1;
    }

    $row = 10;
    $from = ($pages - 1) * $row;

    if (isset($_GET['id'])) {
        $sql_sp = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc = '$_GET[id]' ORDER BY id_SP DESC LIMIT $from,$row";
    } else {
        $sql_sp = "SELECT * FROM sanpham ORDER BY id_SP DESC LIMIT $from,$row";
    }
    $query_sp = $mysqli->query($sql_sp);
    return $query_sp;
}
$query_sp = getQuery();

function getNumOfMenu()
{
    global $mysqli;
    $count = 10;
    if (isset($_GET['id']) && $_GET['id'] > '0' && isset($_GET['id'])  && $_GET['id'] < '6') {
        $sql = "SELECT * FROM sanpham WHERE id_danhmuc = '$_GET[id]'";
        $query = $mysqli->query($sql);
    } else {
        $sql = "SELECT * FROM sanpham";
        $query = $mysqli->query($sql);
    }
    $result = array();
    while ($rows = mysqli_fetch_assoc($query)) {
        $result[] = $rows;
    }
    $count = count($result);
    return $count;
}
$numOfPage = ceil(getNumOfMenu() / 10);
echo getNumOfMenu();

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
        <!-- Phân Trang  -->
        <?php
        for ($i = 1; $i <= $numOfPage; $i++) {
        ?>
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li><a href="index.php?id=1&pages=<?php echo $i ?>"> <?php echo $i ?></a></li>
                </ul>
            </nav>
        <?php
        }
        ?>


    </div>
</div>