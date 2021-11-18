<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tất Cả Sản Phẩm</title>

    <!-- all css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Pacifico'" />
    <link rel="stylesheet" href="../../assets//font/fontawesome-free-5.15.4-web/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/grid.css" />
    <link rel="stylesheet" href="../../assets/css/base.css" />
    <link rel="stylesheet" href="../../assets/css/responsive.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <!--  Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body style="background-image: url(../../assets/img/banner/nen1.jpg);">
    <div class="app">
        <?php include('../header.php'); ?>

        <div>
            <div class="phanhoi-table">
                <form action="phanhoi_submit.php" method="POST" class="FormPH">

                    <table>
                        <div>
                            <tr>
                                <td>Họ và tên</td>
                                <td><input type="text" name="fullname_PH" class="txbPH"></td>
                            </tr>
                            <tr>
                                <td>Vấn đề</td>
                                <td><input type="text" name="vande_PH" class="txbPH"></td>
                            </tr>
                            <tr>
                                <td>Nội dung</td>
                                <td><textarea name="noidung_PH" rows="10"></textarea></td>
                            </tr>
                        </div>
                        <div class="button_ThaoTac">
                            <button type="submit" name="send">Gửi phản hồi</button>
                            <button type="reset">Làm mới</button>
                        </div>

                    </table>
                </form>
            </div>
            <?php include('../footer.php'); ?>
        </div>
</body>

</html>