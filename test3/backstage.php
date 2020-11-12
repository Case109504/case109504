<!DOCTYPE HTML>
<?php
session_start();
include 'php/FindOrder.php';
?>
<html>
	<head>
		<title>搜劇Film Seeker 搜尋</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
		<?php
			if(isset($_SESSION["unLog"])){
				if($_SESSION["unLog"]){
					echo '<script>  swal({
					text: "未登入或登入逾時！",
					icon: "error",
					button: false,
					timer: 2000,
					}); </script>';
					session_unset();
				}   
			}
			
			if (isset($_POST["next"])) {
				findUser($_POST["account"], $_POST["password"]);
			}
        ?>
		<!-- Header -->
		<header id="header">
				<div class="logo"><a href="home.php">搜劇Film Seeker <span></span></a></div>
				<a href="#menu"></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="home.php">首頁</a></li>
					<li><a href="imageSearch.html">圖片搜尋</a></li>
					<li><a href="member_login_php.php">會員登入/註冊</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>你好，管理員</p>
						<h2>歡迎來到管理頁面</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>請輸入帳號、密碼</p>
								<h2>管理員登入</h2>
							</header>
							<body>
								<form method="post" action="">

									<div class="6u 12u$(small)" style="margin-left: 20%"> 
										<h1>帳號：</h1>
										<input type="text" name="account" id="account" value="" placeholder="" required>
									</div>
									<br/>
									<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
										<h1>密碼：</h1>									
										<input type="password" name="password" id="password" value="" placeholder="" required>
									</div>  

									<div class="12u$">
										<ul class="actions">
											<div align="right"  style="margin-right: 5%">

												<li><input type="submit" name="next" value="登入"></li>

											</div>
										</ul>
									</div>
								</form>
							</body>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>