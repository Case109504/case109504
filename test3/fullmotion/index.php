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
		where area_name = '" . $_GET["area_name"]."'";
		$result = $db->query($sql);
		$row = $result->fetch(PDO::FETCH_ASSOC);
		$result->execute();
		$sql2="SELECT * FROM testdb1.video
		left join testdb1.area on video.area_id = area.area_id
		left join testdb1.actor_record on video.video_id = actor_record.video_id
		left join testdb1.actor on actor_record.actor_id = actor.actor_id
		where area_name = '" . $_GET["area_name"]."' and video_name = '" . $row["video_name"]."'";
		$result2 = $db->query($sql2);
		$row2 = $result2->fetch(PDO::FETCH_ASSOC);
		$result2->execute();
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
							<?php echo '<h1>'.$_GET["area_name"].'</h1>'?>
							<p>各劇種介紹與推薦欄位<br />
							透過 <a href="../home.html">搜劇Film Seeker</a> 享受追劇的樂趣</p>
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
								echo '<div class="box">
									<a href="introduction.php?video_name='.$row["video_name"].'" class="image fit" data-poptrox="ignore"><img src="'.$row["picture"].'" alt="" /></a>
									<div class="inner">
										<h3>'.$row["video_name"].'</h3>
										<h4>主演： ';
										$sql2="SELECT * FROM testdb1.video
										left join testdb1.area on video.area_id = area.area_id
										left join testdb1.actor_record on video.video_id = actor_record.video_id
										left join testdb1.actor on actor_record.actor_id = actor.actor_id
										where area_name = '" . $_GET["area_name"]."' and video_name = '" . $row["video_name"]."'
										limit 5";
										$result2 = $db->query($sql2);
										$row2 = $result2->fetch(PDO::FETCH_ASSOC);
										$result2->execute();
								while($row2 = $result2->fetch()){ 
								echo $row2["actor_name"].'<br />';
								}
								echo '</h4>
										<h4>評分： ';
										$sql3="SELECT * FROM testdb1.score
										left join testdb1.video on score.video_id = video.video_id
										left join testdb1.video_from on score.vfrom_id = video_from.vfrom_id
										where video_name = '" . $row["video_name"]."'";
										$result3 = $db->query($sql3);
										$row3 = $result3->fetch(PDO::FETCH_ASSOC);
										$result3->execute();
										while($row3 = $result3->fetch()){ 
											echo $row3["vfrom"].'：'.$row3["score"].'<br />';
											}		
								echo ' <br /></h4>
										<a href="introduction.php?video_name='.$row["video_name"].'&video_id='.$row["video_id"].'&area_name='.$row["area_name"].'" class="button fit" data-poptrox="ignore">影片介紹</a>
									</div>
								</div>';
								
							}
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
			<script async src="https://cse.google.com/cse.js?cx=03d94254dfdc3a617"></script>
			s<div class="gcse-searchresults-only"></div>



	</body>
</html>
