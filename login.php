<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dang Nhap</title>
    <!-- ================link=================== -->
    <link rel="stylesheet" href="./assets/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="./assets/font/fontawesome-free-5.15.4-web/css/all.min.css"
    />
</head>
<body>
    <div id="title">
    <h2>ĐĂNG NHẬP ĐĂNG KÝ</h2>
    </div>
<div class="container" id="container">
	<div class=" sign-container">
		<div id="in">
		<form action="login_submit.php" method="POST">
			<h1>Đăng Nhập</h1>
			<br>
			<input type="text" placeholder="Username" name="username" />
			<input type="password" placeholder="Password" name="password" />
			<!-- <a href="#"> Quên Mật Khâu?</a> -->
			<button type="submit" name="submit">Đăng Nhập</button>
		</form>
		</div>
	</div>
	<div class="sign-container">
		<div id="up">
		<form action="register_submit.php" method="POST">
			<h1>Tạo Tài Khoản</h1>
			<!-- tên đn, mk, nhập lại mk,họ và tên, ngày sinh, giới tính, email, số điện thoại,địa chỉ -->
			<input type="text" placeholder="Tên đăng nhập" name = "username" />
			<input type="password" placeholder="Mật khẩu" name = "password" />
			<input type="password" placeholder="Nhập lại mật khẩu" name = "repassword" />
			<input type="text" placeholder="Họ và tên" name = "fullname" />
			<input type="text" placeholder="ngày sinh yyyy-mm-dd" name = "dateofbirth" />
			<input type="text" placeholder="Giới Tính" name = "sex" />
			<input type="email" placeholder="Email" name = "email" />
			<input type="text" placeholder="Số điện thoại" name = "phonenumber"/>
			<input type="text" placeholder="Địa chỉ" name = "address" />
			<button type="submit" name="submit1">Đăng Ký</button>
		</form>
		</div>
	</div>
</div>
</body>
</html>