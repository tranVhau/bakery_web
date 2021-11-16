<div class="main">
    <?php
    if (isset($_GET['action']) && isset($_GET['query'])) {
        $temp = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $temp = '';
        $query = '';
    }
    if ($temp == 'quanlysanpham' && $query == 'themsp') {
        include("modules/quanlysanpham/them.php");
        include("modules/quanlysanpham/lietke.php");
    } else if ($temp == 'quanlysanpham' && $query == 'sua') {
        include("modules/quanlysanpham/sua.php");
    } elseif ($temp == 'quanlytaikhoan' && $query == 'themtk') {
        include("modules/quanlytaikhoan/lietke.php");
    } else if ($temp == 'quanlytaikhoan' && $query == 'suatk') {
        include("modules/quanlytaikhoan/sua.php");
    } else if ($temp == 'xemphanhoi' && $query == 'xem') {
        include("modules/xemphanhoi/xem.php");
    } else {
        include("modules/dashboard.php");
    }
    ?>

</div>