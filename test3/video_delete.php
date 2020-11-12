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
				DeleteVideo($_POST["video_id"]);
			}

			$db = DB1();
			$sql="SELECT * FROM testdb1.video
			left join testdb1.area on video.area_id = area.area_id
			where video.video_id = '" . $_GET["video_id"]."'";   
			$result = $db->query($sql);
    		$row = $result->fetch(PDO::FETCH_ASSOC);
        ?>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="home.html">搜劇Film Seeker <span></span></a></div>
				<a href="#menu"></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="home.html">首頁</a></li>
					<li><a href="member_login_php.php">登入/註冊</a></li>
					<li><a href="imageSearch.html">圖片搜尋</a></li>
					<li><a href="elements.html">關於我們</a></li>
					<li><a href="backstage.php">管理員</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>你好，管理員<?php echo $_SESSION["accU"]; ?></p>
						<h2>刪除影片，確定要刪除嗎？</h2>
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
								<div class="6u 12u$(small)" style="margin-left: 20%"> 
									<h1>影片編號：</h1>
									<input type="text" name="video_id" id="video_id" value="<?php echo $_GET['video_id']?>" placeholder="" required>
								</div>
								<br/>
								<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
									<h1>影片名稱：</h1>									
									<input type="text" name="video_name" id="video_name" value="<?php echo $row['video_name']?>" placeholder="" required>
								</div>  
								<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
									<h1>影片區域：</h1>									
									<input type="text" name="area_name" id="area_name" value="<?php echo $row['area_name']?>" placeholder="" required>
								</div>  
								<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
									<h1>影片簡介：</h1>									
									<textarea style="height:150px;" name="introduction" id="introduction" value="" placeholder="" required><?php echo $row['introduction']?></textarea>
                                </div>
								<div class="12u$">
									<ul class="actions">
										<div align="right"  style="margin-right: 5%">
											<li><input type="submit" name="next" value="刪除"></li>
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