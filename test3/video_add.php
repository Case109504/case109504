<!DOCTYPE HTML>
<?php
session_start();
include 'php/FindOrder.php';
if ($_SESSION["accU"] == "") {
    header('Location: backstage.php');
    $_SESSION["unLog"] = true;
}
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
				AddVideo($_POST["video_name"], $_POST["area_id"], $_POST["introduction"]);
			}

			$db = DB1();
			$sql="SELECT * FROM testdb1.area";
			$result = $db->query($sql);
			$row = $result->fetch(PDO::FETCH_ASSOC);
			$result->execute();
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
					<li><a href="member_login_php.php">登入/註冊</a></li>
					<li><a href="imageSearch.html">圖片搜尋</a></li>
					
					<li><a href="backstage.php">管理員</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>你好，管理員<?php echo $_SESSION["accU"]; ?></p>
						<h2>新增影片</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
						<head>
						</head>
						<body>
							<form method="post" action="">
								<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
									<h1>影片名稱：</h1>									
									<input type="text" name="video_name" id="video_name" value="" placeholder="" required>
								</div>  
								<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
									<h1>影片區域：</h1>		
									<select name="area_id">
										<?php 
											while($row = $result->fetch()) {
												echo '<option value="'.$row["area_id"].'">'.$row["area_name"].'</option>';
											}
										?>
									</select>
								</div>  
								<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
									<h1>影片介紹：</h1>									
									<textarea style="height:150px;" name="introduction" id="introduction" value="" placeholder="" required></textarea>
								</div>  
								<div class="12u$">
									<ul class="actions">
										<div align="right"  style="margin-right: 5%">
											<li><input type="submit" name="next" value="新增"></li>
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