<div id="Menu-content">
    <section class="section-navbar" id="shopping-home">
        <?php
        if (isset($_GET['direct'])) {
            $temp = $_GET['direct'];
        } else {
            $temp = '';
        }
        if ($temp == 'tranchu') {
            include("Page/main1/giohang.php");
        } else if ($temp == 'banhkem') {
            include("Page/main1/Khuyenmai.php");
        } else if ($temp == 'banhmi') {
            include("Page/main1/PhanHoi.php");
        } else if ($temp == 'thongtin') {
            include("Page/main1/ThongTin.php");
        } else {
            include("Page/main1/index.php");
        };
        ?>
    </section>
</div>
</div>