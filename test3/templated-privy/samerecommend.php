<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
session_start();
include '../php/FindOrder.php';
if ($_SESSION["acc"] == "") {
    header('Location: ../home.html');
    $_SESSION["unLog"] = true;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
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
<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="images/pic02.jpg" alt="" />
			<h1><a href="#"><?php echo $_SESSION["acc"]; ?></a></h1>
			<span>與 <a href="../home.html" rel="nofollow">搜劇Film Seeker</a> 一同好劇</span>
		</div>
		<div id="menu">
			<ul>
				<li><a href="membersonly.php" accesskey="1" title="">會員專區</a></li>
				<li class="current_page_item"><a href="samerecommend.php" accesskey="2" title="">同好推薦</a></li>
				<li><a href="onlyrecommend.php" accesskey="3" title="">客製化推薦</a></li>
				<li><a href="videolist.php" accesskey="4" title="">個人影片清單</a></li>
				<li><a href="share.php" accesskey="5" title="">用戶分享</a></li>
				<li><a href="editinformation.php" accesskey="6" title="">編輯個人資料</a></li>
				<li><a href="../home.html" accesskey="7" title="">返回首頁</a></li>
			</ul>
		</div>
	</div>
	<div id="main">
		<div id="banner">
			<img src="images/pic01.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
			<div class="title">
				<h2>Fusce ultrices fringilla metus</h2>
				<span class="byline">Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue</span>
			</div>
			<p>This is <strong>Privy</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
			<ul class="actions">
				<li><a href="#" class="button">Etiam posuere</a></li>
			</ul>
		</div>
		<div id="featured">
			<div class="title">
				<h2>Maecenas lectus sapien</h2>
				<span class="byline">Integer sit amet aliquet pretium</span>
			</div>
			<?php 
				$db = DB1();
				$sql4="SELECT * FROM testdb1.type_sort
				left join testdb1.vtype on type_sort.vtype_name = vtype.vtype_name
				where account = '" . $_SESSION["acc"]."'
				order by sort desc
				limit 3";
				$result4 = $db->query($sql4);
				$row4 = $result4->fetch(PDO::FETCH_ASSOC);
				$result4->execute();
				while($row4 = $result4->fetch()){ 
					//echo "1<br/>";
					$sql5="SELECT * FROM testdb1.type_sort
					left join testdb1.vtype on type_sort.vtype_name = vtype.vtype_name
					where account != '" . $_SESSION["acc"]."' and sort > 1
					order by sort desc";
					$result5 = $db->query($sql5);
					$row5 = $result5->fetch(PDO::FETCH_ASSOC);
					$result5->execute();
					while($row5 = $result5->fetch()){ 
						//echo "2<br/>".$row4["vtype_name"].$row5["vtype_name"];
						if($row4["vtype_id"]==$row5["vtype_id"]){
							$sql="SELECT * FROM testdb1.member_video_list
							left join testdb1.video on video.video_id = member_video_list.video_id
							left join testdb1.area on video.area_id = area.area_id
							where account != '" . $_SESSION["acc"]."'";
							$result = $db->query($sql);
							$row = $result->fetch(PDO::FETCH_ASSOC);
							$result->execute();
							while($row = $result->fetch()){ 
								//echo "3<br/>";
								echo '<div class="box">
								<a href="../php/videoClickRecord.php?video_name='.$row["video_name"].'&video_id='.$row["video_id"].'&area_name='.$row["area_name"].'" class="image fit" data-poptrox="ignore"><img src="'.$row["picture"].'" height=500px></a>
									<div class="inner">
										<h3>'.$row["video_name"].'</h3>
										<h4>主演： ';
										$sql2="SELECT * FROM testdb1.video
										left join testdb1.area on video.area_id = area.area_id
										left join testdb1.actor_record on video.video_id = actor_record.video_id
										left join testdb1.actor on actor_record.actor_id = actor.actor_id
										where area_name = '" . $row["area_name"]."' and video_name = '" . $row["video_name"]."'
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
										<a href="../fullmotion/introduction.php?video_name='.$row["video_name"].'&video_id='.$row["video_id"].'&area_name='.$row["area_name"].'" class="button fit" data-poptrox="ignore">影片介紹</a>
									</div>
								</div>';
								
							}
						}
					}
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
