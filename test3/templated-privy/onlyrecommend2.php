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
?>
<?php
	$db = DB1();
	$sql="SELECT * FROM testdb1.director
	left join testdb1.director_sort on director_sort.director_name = director.director_name
	left join testdb1.director_record on director.director_id = director_record.director_id
	left join testdb1.video on video.video_id = director_record.video_id
	left join testdb1.area on video.area_id = area.area_id
	where account = '" . $_SESSION["acc"]."'
	order by sort desc";
	$result = $db->query($sql);
	$row = $result->fetch(PDO::FETCH_ASSOC);
	$result->execute();

	$sql4="SELECT * FROM testdb1.member
	where member.account = '" . $_SESSION["acc"]."'";
	$result4 = $db->query($sql4);
	$row4 = $result4->fetch(PDO::FETCH_ASSOC);
	$result4->execute();
?>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/pic02.jpg" alt="" />
			<h1><a href="#"><?php echo $row4["member_name"]; ?></a></h1>
			<span>與 <a href="../home.php" rel="nofollow">搜劇Film Seeker</a> 一同好劇</span>
		</div>
		<div id="menu">
			<ul>
				<li><a href="membersonly.php" accesskey="1" title="">會員專區</a></li>
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
			<img src="images/pic01.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
		</div>
		<div id="featured">
			<div class="title">
				<h2>你可能也喜歡</h2>
				<span class="byline">多樣影片任君挑選</span>
			</div>
			<?php 
				while($row = $result->fetch()){ 
					echo '<h1>'.$row["director_name"].'</h1>';
					echo '<div class="box">
					<a href="../php/videoClickRecord.php?video_name='.$row["video_name"].'&video_id='.$row["video_id"].'&area_name='.$row["area_name"].'" class="image fit" data-poptrox="ignore"><img src="'.$row["picture"].'" height=500px></a>
						<div class="inner">
							<h3>'.$row["video_name"].'</h3>
							<h4>主演： ';
							$sql2="SELECT * FROM testdb1.video
							left join testdb1.area on video.area_id = area.area_id
							left join testdb1.vtype_record on video.video_id = vtype_record.video_id
							left join testdb1.vtype on vtype_record.vtype_id = vtype.vtype_id
							left join testdb1.actor_record on video.video_id = actor_record.video_id
							left join testdb1.actor on actor_record.actor_id = actor.actor_id
							where vtype_name = '" . $row["vtype_name"]."' and video_name = '" . $row["video_name"]."'
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
								if($row3["vfrom"]=='愛奇藝'){
									echo '暫無評分';
								}else{
									echo $row3["vfrom"].'：'.$row3["score"].'<br />';
								}	
							}	
					echo ' <br /></h4>
						</div>
					</div>';
					
				}
				?>
		</div>
		<div id="copyright">
			<span>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a></span>
		</div>
	</div>
</div>
</body>
</html>
