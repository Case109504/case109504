<!DOCTYPE HTML>
<?php
session_start();
include 'php/FindOrder.php';
?>
<html>
	<head>
		<title>搜劇Film Seeker</title>
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
				AddMember($_POST["member_name"], $_POST["birthday"], $_POST["gender"], $_POST["account"], $_POST["password"]);
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
					<li><a href="backstage.php">管理員登入</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>未來的會員您好</p>
						<h2>歡迎來到會員註冊頁面</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							<header class="align-center">
								<p>請輸入名字、生日、性別、帳號、密碼</p>
								<h2>會員註冊</h2>
							</header>
							<body>
								<form method="post" action="">
									<div class="6u 12u$(small)" style="margin-left: 20%; width:60%;"> 
										<h1>名字：</h1>
										<input type="text" name="member_name" id="member_name" value="" placeholder="" required>
									</div>
									<br>
									<div class="6u 12u$(small)" style="margin-left: 20%; width:60%;"> 
										<h1>生日（西元年月日ex：20200101）：</h1>
										<input type="text" name="birthday" id="birthday" value="" placeholder="" pattern="[0-9]{8}" maxlength="8" required>
									</div>
									<br>
									<div class="6u 12u$(small)" style="margin-left: 20%; width:60%;"> 
										<h1>性別（男/女）：</h1>
										<input type="text" name="gender" id="gender" value="" placeholder="" required>
									</div>
									<br>
									<div class="6u 12u$(small)" style="margin-left: 20%; width:60%;> 
										<h1>帳號：</h1>
										<input type="text" name="account" id="account" value="" placeholder="" pattern="[a-zA-Z0-9]{,45}" maxlength="45" required>
									</div>
									<br>
									<div class="6u$ 12u$(small)"  style="margin-left: 20%; width:60%;"> 
										<h1>密碼：</h1>									
										<input type="password" name="password" id="password" value="" placeholder="" pattern="[a-zA-Z0-9]{,45}" maxlength="45" required>
									</div>  
									<br>
									<br>
									<div class="12u$">
										<ul class="actions">
											<div align="right"  style="margin-right: 5%;">
												<li><input type="submit" name="next" value="註冊"></li>
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
					&copy; 搜劇Film Seeker.
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