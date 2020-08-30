<!DOCTYPE HTML>
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

			$sql="select * from testdb.Video ORDER BY video_id";   
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
					<li><a href="generic.html">登入/註冊</a></li>
					<li><a href="imageSearch.html">圖片搜尋</a></li>
					<li><a href="elements.html">關於我們</a></li>
				</ul>
			</nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Eleifend vitae urna</p>
						<h2>Generic Page Template</h2>
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
						<?php
							//首先進行非空排錯
							if(!isset($_POST['video_name'])){
								die('video_name is not define');
							}
							if(!isset($_POST['time'])){
								die('time is not define');
							}
							$video_name=$_POST['video_name'];
							$time=$_POST['time'];
							if(empty($video_name)){
								die('name is empty');
							}
							if(empty($time)){
								die('time is empty');
							}
							
							//插入資料
							mysqli_query("INSERT INTO video(video_name,time) VALUES ('$video_name','$time')");
							//返回列表頁面
							if(mysqli_error()){
								echo mysqli_error();
							}else{
								header("Location:video_select.php");
							}
						?>
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