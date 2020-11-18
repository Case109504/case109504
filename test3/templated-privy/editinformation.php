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
	if (isset($_POST["next"])) {
		UpdateMember($_POST["member_name"], $_POST["birthday"], $_POST["gender"], $_POST["account"], $_POST["password"]);
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
				<li><a href="onlyrecommend.php" accesskey="3" title="">個人推薦</a></li>
				<li><a href="videolist.php" accesskey="4" title="">我的收藏</a></li>
				<li class="current_page_item"><a href="editinformation.php" accesskey="6" title="">編輯個人資料</a></li>
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
			<form method="post" action="">
				<div class="6u 12u$(small)" style="margin-left: 20%"> 
					<h1>帳號：</h1>
					<input type="text" readonly="readonly" name="account" id="account" value="<?php echo $_SESSION["acc"]?>" placeholder="" required>
				</div>
				<br/>
				<div class="6u 12u$(small)" style="margin-left: 20%"> 
					<h1>名字：</h1>
					<input type="text" name="member_name" id="member_name" value="<?php echo $row['member_name']?>" placeholder="" required>
				</div>
				<br/>
				<div class="6u 12u$(small)" style="margin-left: 20%"> 
					<h1>生日（西元年月日ex：20200101）：</h1>
					<input type="text" name="birthday" id="birthday" value="<?php echo $row['birthday']?>" placeholder="" pattern="[0-9]{8}" maxlength="8" required>
				</div>
				<br/>
				<div class="6u 12u$(small)" style="margin-left: 20%"> 
					<h1>性別（男/女）：</h1>
					<input type="text" name="gender" id="gender" value="<?php echo $row['gender']?>" placeholder="" required>
				</div>
				<br/>
				<div class="6u$ 12u$(small)"  style="margin-left: 20%"> 
					<h1>密碼：</h1>									
					<input type="text" name="password" id="password" value="<?php echo $row['password']?>" placeholder="" pattern="[a-zA-Z0-9]{,45}" maxlength="45" required>
				</div>  
				<div class="12u$">
					<ul class="actions">
						<div align="right"  style="margin-right: 5%">
							<li><input type="submit" name="next" value="修正"></li>
						</div>
					</ul>
				</div>
			</form>
		</div>
		<div id="copyright">
			<span>&copy; 搜劇Film Seeker. | Photos by <a href="http://fotogrph.com/">Fotogrph</a></span>
		</div>
	</div>
</div>
</body>
</html>
