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

		$sql="select Video.video_name , type.type_name , director.director_name, actor_name, screenwriter_name, source_name, plot_name, area_name, awards_name, film_source ,type_name from testdb.Video
		left join testdb.type on Video.type_id = type.type_id 
		left join testdb.director_record on Video.video_id = director_record.video_id
		left join testdb.director on director.director_id = director_record.director_id
		left join testdb.actor_record on Video.video_id = actor_record.video_id
		left join testdb.actor on actor.actor_id = actor_record.director_id
		left join testdb.screenwriter_record on Video.video_id = screenwriter_record.video_id
		left join testdb.screenwriter on screenwriter.screenwriter_id = screenwriter_record.screenwriter_id
		left join testdb.access on Video.video_id = access.video_id
		left join testdb.sources on sources.source_id = access.source_id
		left join testdb.plot_record on Video.video_id = plot_record.video_id
		left join testdb.plot on plot.plot_id = plot_record.plot_id
		left join testdb.area on Video.area_id = area.area_id
		left join testdb.awards on Video.video_id = awards.video_id
		left join testdb.film_source on Video.video_id = film_source.video_id
		";   
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
							透過 <a href="index.html">明察秋毫</a> 享受追劇的樂趣</p>
						</header>
						<a href="#main" class="more">更多推薦</a>
					</div>
				</section>

			<!-- Main -->
				<div id="main">
					<div class="inner">

					<!-- Boxes -->
						<div class="thumbnails">

							<div class="box">
								<a href="https://youtu.be/c189RrFzY8w" class="image fit"><img src="images/pic01.jpg" alt="" /></a>
								<div class="inner">
									<h3><a href="#">太陽的後裔</a> </h3>
									<p>主演： 宋仲基 / 宋慧喬 / 晉久 / 金智媛<br /><br />以美麗的南國風光為背景展開，通過處在陌生且惡劣環境中渴望愛情和成功的年輕軍人和醫生的生活，展現生命意義的治愈系羅曼史。</p>
									<a href="https://youtu.be/c189RrFzY8w" class="button fit" data-poptrox="youtube,800x400">搶先看</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/c189RrFzY8w" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
								<div class="inner">
									<h3><a href="#">鬼怪</a></h3>
									<p>主演： 孔劉 / 金高銀 / 李棟旭 / 劉仁娜 / 陸星材<br /><br />想結束永生的鬼怪作為不死之身守護者的鬼怪要結束永生，需要一名人類新娘與陰間使者一起迎接來自人間的亡者的故事。</p>
									<a href="https://youtu.be/c189RrFzY8w" class="button style2 fit" data-poptrox="youtube,800x400">搶先看</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/c189RrFzY8w" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
								<div class="inner">
									<h3><a href="#">德魯納酒店</a></h3>
									<p>主演： 呂珍九 / IU<br /><br />這間在繁華的韓國首爾市中心，擁有陳舊外觀的「德魯納酒店」，只向無法離開的靈魂們展示其華麗的真面目的點點滴滴。</p>
									<a href="https://youtu.be/c189RrFzY8w" class="button style3 fit" data-poptrox="youtube,800x400">搶先看</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/c189RrFzY8w" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
								<div class="inner">
									<h3><a href="#">他人即地獄</a></h3>
									<p>主演： 任時完 / 李棟旭 / 李姃垠<br /><br />來自鄉下的男主角尹鍾宇首次到首爾後住進考試院，然而考試院的左右鄰居全是怪人，也因此發展出一系列驚悚故事。</p>
									<a href="https://youtu.be/c189RrFzY8w" class="button style2 fit" data-poptrox="youtube,800x400">搶先看</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/c189RrFzY8w" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
								<div class="inner">
									<h3><a href="#">主君的太陽</a></h3>
									<p>主演： 蘇志燮 / 孔曉振 / 徐仁國 / 金釉利 <br /><br />一個一直以來只接受自己所聽所看到的，傲慢放肆且以自我為中心的男人，與能夠看見鬼的女人和守護在她身邊的男人之間的故事。</p>
									<a href="https://youtu.be/c189RrFzY8w" class="button style3 fit" data-poptrox="youtube,800x400">搶先看</a>
								</div>
							</div>

							<div class="box">
								<a href="https://youtu.be/c189RrFzY8w" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
								<div class="inner">
									<h3><a href="#">繼承者們</a></h3>
									<p>主演： 李敏鎬 / 朴信惠 / 金宇彬 / 鄭秀晶<br /><br />以官閥家高中生生活為背景，故事核心為富家子跟貧家女的故事。講述了佔韓國0.1%上流社會的高中生富家子弟們的故事。</p>
									<a href="https://youtu.be/c189RrFzY8w" class="button fit" data-poptrox="youtube,800x400">搶先看</a>
								</div>
							</div>
							<?php 
							//while($res->num_rows > 0){可改if
								while($row = $res->fetch_assoc()) {
									// echo '<td>'.$row["video_id"]."".$row["video_name"]."".$row["time"].'</td></br>';   //輸出結果
									echo '<div class="box">
									<a href="https://youtu.be/c189RrFzY8w" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
									<div class="inner">
										<h3><a href="#">'.$row["video_name"].'</a></h3>
										<p>主演： '.$row["actor_name"].'<br /><br />以官閥家高中生生活為背景，故事核心為富家子跟貧家女的故事。講述了佔韓國0.1%上流社會的高中生富家子弟們的故事。</p>
										<a href="https://youtu.be/c189RrFzY8w" class="button fit" data-poptrox="youtube,800x400">搶先看</a>
									</div>
								</div>';
								}
							//}
							$cn->close();
			?>
							

						</div>

					</div>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<h2>明察秋毫</h2>
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
