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
			$hostname = "140.131.115.87:3306";
			$username = "root";
			$password = "109504109504";
			$databasename = "testdb";
			
			// 創建連接
			$cn = new mysqli($hostname,$username,$password,$databasename);
			
			if (!$cn)//判斷連線是否為空
			{
			die("連線錯誤: " . mysqli_connect_error());//連線失敗 列印錯誤日誌
			}
			$cn->query("SET NAMES utf8");//設定 字符集為utf8格式
			$cn->select_db("Video");//選擇要操作的資料表

			$sql="select distinct Video.video_id, Video.video_name , Video.videopicture , type.type_name , director.director_name, actor_name, screenwriter_name, source_name, plot_name, area_name, awards_name, film_source ,type_name,score,comments_name from testdb.Video
			left join testdb.type on Video.type_id = type.type_id 
			left join testdb.director_record on Video.video_id = director_record.video_id
			left join testdb.director on director.director_id = director_record.director_id
			left join testdb.actor_record on Video.video_id = actor_record.video_id
			left join testdb.actor on actor.actor_id = actor_record.actor_id
			left join testdb.screenwriter_record on Video.video_id = screenwriter_record.video_id
			left join testdb.screenwriter on screenwriter.screenwriter_id = screenwriter_record.screenwriter_id
			left join testdb.access on Video.video_id = access.video_id
			left join testdb.sources on sources.source_id = access.source_id
			left join testdb.plot_record on Video.video_id = plot_record.video_id
			left join testdb.plot on plot.plot_id = plot_record.plot_id
			left join testdb.area on Video.area_id = area.area_id
			left join testdb.awards on Video.video_id = awards.video_id
			left join testdb.film_source on Video.video_id = film_source.video_id
			left join testdb.score on Video.video_id = score.video_id
			left join testdb.comments on Video.video_id = comments.video_id
			group by video_id"; 
			mysqli_query($cn,$sql);    //傳入資料庫連線引數，sql字串。
			$res=$cn->query($sql);    //接收查詢產生的結果集
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
							<tr><th>影片編號</th><th>影片名稱</th><th>主演</th><th>類型</th><th>導演</th><th>編劇</th><th>修改/刪除</th></tr>
						<?php
						while($row = $res->fetch_assoc()) {
							echo "<tr><td width='5%'>".$row["video_id"]."</td>
							<td width='15%'>".$row["video_name"]."</td>
							<td width='10%'>".$row["actor_name"]."</td>
							<td width='10%'>".$row["type_name"]."</td>
							<td width='10%'>".$row["director_name"]."</td>
							<td width='10%'>".$row["screenwriter_name"]."</td>
							<td width='10%'><a href='video_edit.php?video_id=".$row["video_id"]."'>修改</a> <a href='video_delete.php?video_id=".$row["video_id"]."'>刪除</a></td></tr>";
						}
						$cn->close();
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