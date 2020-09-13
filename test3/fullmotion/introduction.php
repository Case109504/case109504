<!DOCTYPE HTML>
<?php
include '../php/DataBase.php';
?>
<html lang = "zh-tw">
	<head>
		<title>Full Motion</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">
	<?php
		$db = DB1();
		$sql="SELECT * FROM testdb1.video
		left join testdb1.area on video.area_id = area.area_id
		left join testdb1.actor_record on video.video_id = actor_record.video_id
		left join testdb1.actor on actor_record.actor_id = actor.actor_id
		left join testdb1.director_record on video.video_id = director_record.video_id
		left join testdb1.director on director_record.director_id = director.director_id
		left join testdb1.video_from on video.vfrom_id = video_from.vfrom_id
		left join testdb1.vtype_record on video.video_id = vtype_record.video_id
		left join testdb1.vtype on vtype_record.vtype_id = vtype.vtype_id
		where video_name = '" . $_GET["video_name"]."'";   
		$result = $db->query($sql);
		$row = $result->fetch(PDO::FETCH_ASSOC);
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
							<?php echo "<h1>".$row["area_name"]."</h1>"?>
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
                                while($row = $result->fetch()){ 
                                    echo '<div class="image fit">
									<img src="'.$row["video_id"].'" alt="" /></a>
									</div>';
								echo "<p>影片名稱：" .$_GET["video_name"]."<br/>主演：" .$row["actor_name"]."<br/>簡介：" .$row["introduction"]."<br/>類型：" .$row["vtype_name"]."<br/>導演：" .$row["director_name"]."<br/>編劇：" .$row["video_id"]."<br/>劇別：" .$row["video_id"]."<br/>區域：" .$row["area_name"]."<br/><a href = '".$row["vlink"]."' data-poptrox='ignore'>影片來源：" .$row["vfrom"]."</a><br/>評分：" .$row["video_id"]."</p>";
								echo "<p>評論：" .$row["video_id"]."</p>";
								while($row = $result->fetch()){
									echo "<p>評論：" .$row["video_id"]."</p>";
                                }}
							?>
							<!---
							<?php 
							/*while($row=mysqli_fetch_array($res)){
								echo '<div class="image fit">
									<img src="'.$row["videopicture"].'" alt="" /></a>
									</div>';
								echo "<p>影片名稱：" .$_GET["video_name"]."<br/>主演：" .$row["actor_name"]."<br/>簡介：" .$row["plot_name"]."<br/>類型：" .$row["type_name"]."<br/>導演：" .$row["director_name"]."<br/>編劇：" .$row["screenwriter_name"]."<br/>劇別：" .$row["source_name"]."<br/>區域：" .$row["area_name"]."<br/>影片來源：" .$row["film_source"]."<br/>評分：" .$row["score"]."</p>";
								echo '<a href = "'.$row["videourl"].'" data-poptrox="ignore">影片來源（愛奇藝）</a>';
								echo "<p>評論：" .$row["comments_name"]."</p>";
								while($row=mysqli_fetch_array($res)){
									echo "<p>評論：" .$row["comments_name"]."</p>";
								}
								
							}
							
							$cn->close();*/
							?>--->
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
