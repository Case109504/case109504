<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
include '../php/FindOrder.php';
if ($_SESSION["acc"] == "") {
    header('Location: ../home.php');
    $_SESSION["unLog"] = true;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>搜劇Film Seeker</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="referrer" content="never">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
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
	$db = DB1();
	$sql="SELECT * FROM testdb1.member
	where member.account = '" . $_SESSION["acc"]."'";
	$result = $db->query($sql);
	$row = $result->fetch(PDO::FETCH_ASSOC);
	$result->execute();
?>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/pic02.png" alt="" />
			<h1><a href="#"><?php echo $row["member_name"]; ?></a></h1>
			<span>與 <a href="../home.php" rel="nofollow">搜劇Film Seeker</a> 一同好劇</span>
		</div>
		<div id="menu">
			<ul>
				<li><a href="membersonly.php" accesskey="1" title="">使用指南</a></li>
				<li><a href="samerecommend.php" accesskey="2" title="">同好推薦</a></li>
				<li class="current_page_item"><a href="onlyrecommend.php" accesskey="3" title="">個人推薦</a></li>
				<li><a href="videolist.php" accesskey="4" title="">我的收藏</a></li>
				<li><a href="editinformation.php" accesskey="6" title="">編輯個人資料</a></li>
				<li><a href="../home.php" accesskey="7" title="">返回首頁</a></li>
			</ul>
		</div>
	</div>
	<div id="main">
		<div id="banner">
			<img src="images/pic01.png" alt="" class="image-full" />
		</div>
		<div id="welcome">
		</div>
		<div id="featured">
			<div class="title">
				<h2>請選擇想找的分類</h2>
				<span class="byline">會為您導向到推薦給您的分類頁面~</span><br/>
				<input type="button" value="類型" onclick="location.href='onlyrecommend1.php'" style="width:120px;height:40px;font-size:20px;">
				<input type="button" value="導演" onclick="location.href='onlyrecommend2.php'" style="width:120px;height:40px;font-size:20px;">
				<input type="button" value="地區" onclick="location.href='onlyrecommend3.php'" style="width:120px;height:40px;font-size:20px;">
			</div>
		</div>
		<div id="copyright">
			<span>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a></span>
		</div>
	</div>
</div>
</body>
</html>
