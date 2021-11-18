<!DOCTYPE html>
<html lang="en">
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
	<div class="form-container sign-up-container">
		<form action="register_submit.php" method="POST">
			<h1>Tạo Tài Khoản</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>Hoặc Tự Đăng Ký Bằng Mail</span>
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
	<div class="form-container sign-in-container">
		<form action="login_submit.php" method="POST">
			<h1>Đăng Nhập</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<span>Hoặc Sử Dụng Tài Khoản Của Bạn</span>
			<input type="text" placeholder="Username" name="username" />
			<input type="password" placeholder="Password" name="password" />
			<!-- <a href="#"> Quên Mật Khâu?</a> -->
			<button type="submit" name="submit">Đăng Nhập</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Chào Mừng Trở Lại!</h1>
				<p>Let's Go Bắt đầu Mua Bánh Thôi!!!</p>
				<button class="ghost" id="signIn">Đăng Nhập</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Xin Chào Bạn!</h1>
				<p>Nhập thông tin bạn vào để bắt đầu hành trình Shopping</p>
				<button class="ghost" id="signUp">Đăng Ký</button>
			</div>
		</div>
	</div>
</div>
<script src="./assets/js/login.js"></script>
</body>
</html>