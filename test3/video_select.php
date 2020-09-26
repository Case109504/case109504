<!DOCTYPE HTML>
<?php
session_start();
include 'php/FindOrder.php';
if ($_SESSION["acc"] == "") {
    header('Location: backstage.php');
    $_SESSION["unLog"] = true;
}
?>
<html>
	<head>
		<title>明察秋毫 搜尋</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">
		<?php
			$db = DB1();
			$sql="SELECT * FROM testdb1.video
			left join testdb1.area on video.area_id = area.area_id";
			$result = $db->query($sql);
			$row = $result->fetch(PDO::FETCH_ASSOC);
			$result->execute();
		?>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="home.html">明察秋毫 <span></span></a></div>
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
					<li><a href="php/logOut.php">登出</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>你好，管理員<?php echo $_SESSION["acc"]; ?></p>
						<h2>影片總覽</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
						<head>
							<meta charset="UTF-8">
							<style>
								table{
									border-collapse: collapse;
								}
								th,td{
									border:1px solid #ccccff;
									padding: 5px;
								}
								td{
									text-align: center;
								}
							</style>
						</head>
						<body>
						<input name="submit" type="button" id="submit" onclick="location.href='video_add.php'" value="新增影片" />
						<input name="submit" type="button" id="submit" onclick="location.href='php/logOut.php'" value="登出" />
						<P></P>
						<table>
							<tr><th>影片編號</th><th>影片繁中</th><th>影片英文</th><th>影片簡中</th><th>區域</th><th>介紹</th><th>修改/刪除</th></tr>
						<?php
						while($row = $result->fetch()) {
							echo "<tr><td width='5%'>".$row["video_id"]."</td>
							<td width='5%'>".$row["video_name"]."</td>
							<td width='5%'>".$row["video_eg_name"]."</td>
							<td width='5%'>".$row["video_ch_name"]."</td>
							<td width='10%'>".$row["area_name"]."</td>
							<td width='60%'>".$row["introduction"]."</td>
							<td width='10%'><a href='video_update.php?video_id=".$row["video_id"]."'>修改</a> <a href='video_delete.php?video_id=".$row["video_id"]."'>刪除</a></td></tr>";
						}
						?>
						</table>
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