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

			$db = DB();
			$sql="select * from testdb.Video
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
			where Video.video_id = '" . $_GET["video_id"]."'";   
			$result = $db->query($sql);
    		$row = $result->fetch(PDO::FETCH_ASSOC);
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
									<h1>影片類型：</h1>									
									<input type="text" name="type_id" id="type_id" value="<?php echo $row['type_id']?>" placeholder="" required>
								</div>  
								<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
									<h1>影片國家：</h1>									
									<input type="text" name="area_id" id="area_id" value="<?php echo $row['area_id']?>" placeholder="" required>
                                </div>
                                <?php 
                                while($row = $result->fetch()){ 
                                    echo
                                        '<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
                                            <h1>評論：</h1>									
                                            <textarea style="height:150px;" name="comments_name" id="comments_name" value="" placeholder="" required>'.$row['comments_name'].'</textarea>
                                        </div>'
                                ;}
                                ?>
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