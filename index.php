<?php
include 'config.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>MoonBakery</title>

  <!-- all css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800|Pacifico'" />
  <link rel="stylesheet" href="./assets/font/fontawesome-free-5.15.4-web/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/grid.css" />
  <link rel="stylesheet" href="./assets/css/base.css" />
  <link rel="stylesheet" href="./assets/css/main.css" />
  <link rel="stylesheet" href="./assets/css/responsive.css" />
  <!--  Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body>
  <div class="app">

    <?php
    include('admin/config/config.php');
    include('Page/header.php');
    include('Page/slider.php');
    include('Page/content.php');
    include('Page/contact.php');
    include('Page/footer.php');

    ?>
  </div>
  <script src="./assets/js/main.js"></script>
</body>

</html>