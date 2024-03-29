<!DOCTYPE HTML>
<html lang = "zh-tw">
	<head>
		<title>Full Motion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">
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

		$sql="select Video.video_name , Video.videopicture , type.type_name , director.director_name, actor_name, screenwriter_name, source_name, plot_name, area_name, awards_name, film_source ,type_name,score,comments_name,videourl from testdb.Video
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
		where video_name = '" . $_GET["video_name"]."'";   
		mysqli_query($cn,$sql);    //傳入資料庫連線引數，sql字串。
		$res=$cn->query($sql);    //接收查詢產生的結果集
		
		    //將結果集賦值給陣列物件
		

?>
			<!-- Banner -->
			<!--
				To use a video as your background, set data-video to the name of your video without
				its extension (eg. images/banner). Your video must be available in both .mp4 and .webm
				formats to work correctly.
			-->
				<section id="banner" data-video="images/banner">
					<div class="inner">
						<header>
							<h1>韓劇</h1>
							<p>各劇種介紹與推薦欄位<br />
							透過 <a href="index.php">搜劇Film Seeker</a> 享受追劇的樂趣</p>
						</header>
						<a href="#main" class="more">更多推薦</a>
					</div>
				</section>

			<!-- Main -->
			<div id="main">
					<div class="inner">

					<!-- Boxes -->
						<div class="thumbnails">
							<?php 
							while($row=mysqli_fetch_array($res)){
								echo '<div class="image fit">
									<img src="'.$row["videopicture"].'" alt="" /></a>
									</div>';
								echo "<h3>影片名稱：" .$_GET["video_name"]."<br/>主演：" .$row["actor_name"]."<br/>簡介：" .$row["plot_name"]."<br/>類型：" .$row["type_name"]."<br/>導演：" .$row["director_name"]."<br/>編劇：" .$row["screenwriter_name"]."<br/>劇別：" .$row["source_name"]."<br/>區域：" .$row["area_name"]."<br/>影片來源：" .$row["film_source"]."<br/>評分：" .$row["score"]."</h3>";
								echo '<a href = "'.$row["videourl"].'" data-poptrox="ignore">影片來源（愛奇藝）</a>';
								echo "<h3>評論：" .$row["comments_name"]."</h3>";
								while($row=mysqli_fetch_array($res)){
									echo "<h3>評論：" .$row["comments_name"]."</h3>";
								}
								
							}
							
							$cn->close();
							?>
							

						</div>

					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<h2>搜劇Film Seeker</h2>
						<p>您搜尋及評價影劇的最好夥伴 </p>

						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="https://templated.co">TEMPLATED</a>. Images: <a href="https://unsplash.com/">Unsplash</a>. Videos: <a href="http://coverr.co/">Coverr</a>.</p>
					</div>
				</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>



	</body>
</html>