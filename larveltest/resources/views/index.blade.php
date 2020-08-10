<!DOCTYPE HTML>
<html lang = "zh-tw">
	<head>
		<title>搜劇Film Seeker</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main2.css" />
	</head>
	<body id="top">
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
							use Illuminate\Support\Facades\DB;
							$Video = DB::table('Video')
							->leftJoin('type', 'Video.type_id', '=', 'type.type_id')
							->leftJoin('director_record', 'Video.video_id', '=', 'director_record.video_id')
							->leftJoin('director', 'director.director_id', '=', 'director_record.director_id')
							->leftJoin('actor_record', 'Video.video_id', '=', 'actor_record.video_id')
							->leftJoin('actor', 'actor.actor_id', '=', 'actor_record.actor_id')
							->leftJoin('screenwriter_record', 'Video.video_id', '=', 'screenwriter_record.video_id')
							->leftJoin('screenwriter', 'screenwriter.screenwriter_id', '=', 'screenwriter_record.screenwriter_id')
							->leftJoin('access', 'Video.video_id', '=', 'access.video_id')
							->leftJoin('sources', 'sources.source_id', '=', 'access.source_id')
							->leftJoin('plot_record', 'Video.video_id', '=', 'plot_record.video_id')
							->leftJoin('plot', 'plot.plot_id', '=', 'plot_record.plot_id')
							->leftJoin('area', 'Video.area_id', '=', 'area.area_id')
							->leftJoin('awards', 'Video.video_id', '=', 'awards.video_id')
							->leftJoin('film_source', 'Video.video_id', '=', 'film_source.video_id')
							->leftJoin('score', 'Video.video_id', '=', 'score.video_id')
							->get();
							foreach ($Video as $Video)
							{
								echo '<div class="box">
									<a href="introduction?video_name='.$Video->video_name.'" class="image fit" data-poptrox="ignore"><img src="'.$Video->videopicture.'" alt="" /></a>
									<div class="inner">
										<h3>'.$Video->video_name.'</h3>
										<p>主演： '.$Video->actor_name.'<br /></p>
										<p>評分： '.$Video->score.' <br /></p>
										<a href="introduction?video_name='.$Video->video_name.'" class="button fit" data-poptrox="ignore">影片介紹</a>
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
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrolly.min.js"></script>
			<script src="js/jquery.poptrox.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main2.js"></script>



	</body>
</html>
