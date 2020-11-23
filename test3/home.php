<!DOCTYPE HTML>
<?php
session_start();
include 'php/FindOrder.php';
if (isset($_SESSION["acc"])&&$_SESSION["acc"]!="") {
	echo '<html lang = "zh-tw">
	<head>
		<title>搜劇Film Seeker 首頁</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://kit.fontawesome.com/028c714c47.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="home.php">搜劇Film Seeker <span></span></a></div>
				<a href="#menu"></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="home.php">首頁</a></li>
					<li><a href="imageSearch.html">圖片搜尋</a></li>
					<li><a href="templated-privy/membersonly.php">會員功能</a></li>
					<li><a href="php/logOut.php">登出</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>透過<a href="#">搜劇Film Seeker</a> 以圖盡情搜尋您感興趣的影劇</p>
							<h2>獨創 以圖搜劇</h2>
						</header>
					</div>	
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>將多個知名網站影劇評價彙整統一 讓您不必再為找好劇煩惱</p>
							<h2>匯聚 統整評價</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>各大影劇平台功能皆一應具全 再也不需要頻繁切換網頁</p>
							<h2>省時 多工結合</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>冷門劇種再也不怕受限 只有您不知道沒有我們搜不到</p>
							<h2>多樣 劇劇到位</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>我們將是您最好的搜尋及評分影劇平台夥伴</p>
							<h2>搜劇Film Seeker</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic01.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>臺劇</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=臺灣地區" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>陸劇</h2>
									</header>
									<h4>《許你浮生若夢》由霍爾果斯華娛時代影業有限公司、世紀長龍影視有限公司、北京華奇世紀影業有限公司、杭州科地資本集團、中廣天擇傳媒股份有限公司聯合出品，由高寒執導，朱一龍、安悅溪領銜主演，程硯秋、朱鑒然、李德龍、方逸倫、帝娜、李感、薛亦倫、馬東延、楊晞主演，岳躍利、吳毅將特別主演的年代愛情劇 。
										
										</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=大陸地區" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>韓劇</h2>
									</header>
									<h4>2020韓劇追劇清單來了～繼《李屍朝鮮2》、《梨泰院Class》劇終後現在最熱門的絕對是《鬼媽媽》、《夫婦的世界》莫屬，劇中後也別擔心劇荒《永遠的君主》由李敏鎬由主演也超令人期待！今年還有燒腦神劇回歸《信號2》，以及許多韓劇男神都退伍回歸電視劇～2020年也是好劇追不完，2020最新韓劇持續更新中～</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=韓國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic04.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>日劇</h2>
									</header>
									<h4>踏入 2020 年，又有新一輪日劇要上映啦！2020 年精彩日劇真的數之不盡，除了第一季大熱的《戀愛可以持續到天長地久》外，各個電視台紛紛派出天王天后迎戰，包括堺雅人《半澤直樹》、木村拓哉《搏命保鑣》、篠原涼子《超級特派員》、織田裕二與鈴木保奈美《金裝律師》都會推出第二季，大家又有好劇可追了。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=日本" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>恐怖類、溫馨類、評價高、評價低.......(施工中)</p>
						<h2>劇情分類</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">泰國、越南、印尼、印度、美國、英國、法國、德國、義大利等多國影劇任您挑選</p>
						<h2>多國劇種</h2>
					</header>
					<div class="gallery">
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic11.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>美劇</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=美國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic12.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>港劇</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=香港" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic13.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>法國</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=法國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic14.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>義大利</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=意大利" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic15.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>英國</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=英國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic16.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>加拿大</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=加拿大" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic17.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>冰島</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=冰島" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic18.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>印度</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=印度" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic19.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>瑞士</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=瑞士" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic20.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>德國</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=德國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic21.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>紐西蘭</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=新西蘭" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic22.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>波蘭</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=波蘭" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic23.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>澳大利亞</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=澳大利亞" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic24.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>西班牙</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=西班牙" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic25.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>南非</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=南非" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
					
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic26.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>瑞典</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=瑞典" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic27.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>希臘</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=希臘" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic28.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>泰國</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=泰國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic29.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>阿聯酋</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=阿聯酋" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic30.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>捷克</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=捷克" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic31.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>俄羅斯</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=俄羅斯" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
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
					&copy; 搜劇Film Seeker.
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
';
}else{
	echo '<html lang = "zh-tw">
	<head>
		<title>搜劇Film Seeker 首頁</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="https://kit.fontawesome.com/028c714c47.js" crossorigin="anonymous"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="home.php">搜劇Film Seeker <span></span></a></div>				
				<a href="#menu"></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="home.php">首頁</a></li>
					<li><a href="imageSearch.html">圖片搜尋</a></li>
					<li><a href="member_login_php.php">會員登入/註冊</a></li>
					<li><a href="backstage.php">管理員登入</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/slide01.jpg" alt="" />
					<div class="inner">
						<header>
							<p>透過<a href="#">搜劇Film Seeker</a> 以圖盡情搜尋您感興趣的影劇</p>
							<h2>獨創 以圖搜劇</h2>
						</header>
					</div>	
				</article>
				<article>
					<img src="images/slide02.jpg" alt="" />
					<div class="inner">
						<header>
							<p>將多個知名網站影劇評價彙整統一 讓您不必再為找好劇煩惱</p>
							<h2>匯聚 統整評價</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide03.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>各大影劇平台功能皆一應具全 再也不需要頻繁切換網頁</p>
							<h2>省時 多工結合</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide04.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>冷門劇種再也不怕受限 只有您不知道沒有我們搜不到</p>
							<h2>多樣 劇劇到位</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>我們將是您最好的搜尋及評分影劇平台夥伴</p>
							<h2>搜劇Film Seeker</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic01.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>臺劇</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=臺灣地區" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>陸劇</h2>
									</header>
									<h4>《許你浮生若夢》由霍爾果斯華娛時代影業有限公司、世紀長龍影視有限公司、北京華奇世紀影業有限公司、杭州科地資本集團、中廣天擇傳媒股份有限公司聯合出品，由高寒執導，朱一龍、安悅溪領銜主演，程硯秋、朱鑒然、李德龍、方逸倫、帝娜、李感、薛亦倫、馬東延、楊晞主演，岳躍利、吳毅將特別主演的年代愛情劇 。
										
										</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=大陸地區" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>韓劇</h2>
									</header>
									<h4>2020韓劇追劇清單來了～繼《李屍朝鮮2》、《梨泰院Class》劇終後現在最熱門的絕對是《鬼媽媽》、《夫婦的世界》莫屬，劇中後也別擔心劇荒《永遠的君主》由李敏鎬由主演也超令人期待！今年還有燒腦神劇回歸《信號2》，以及許多韓劇男神都退伍回歸電視劇～2020年也是好劇追不完，2020最新韓劇持續更新中～</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=韓國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic04.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>日劇</h2>
									</header>
									<h4>踏入 2020 年，又有新一輪日劇要上映啦！2020 年精彩日劇真的數之不盡，除了第一季大熱的《戀愛可以持續到天長地久》外，各個電視台紛紛派出天王天后迎戰，包括堺雅人《半澤直樹》、木村拓哉《搏命保鑣》、篠原涼子《超級特派員》、織田裕二與鈴木保奈美《金裝律師》都會推出第二季，大家又有好劇可追了。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=日本" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>恐怖類、溫馨類、評價高、評價低.......(施工中)</p>
						<h2>劇情分類</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">泰國、越南、印尼、印度、美國、英國、法國、德國、義大利等多國影劇任您挑選</p>
						<h2>多國劇種</h2>
					</header>
					<div class="gallery">
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic11.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>美劇</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=美國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic12.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>港劇</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=香港" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic13.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>法國</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=法國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic14.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>義大利</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=意大利" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic15.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>英國</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=英國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic16.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>加拿大</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=加拿大" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic17.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>冰島</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=冰島" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic18.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>印度</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=印度" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic19.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>瑞士</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=瑞士" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic20.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>德國</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=德國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic21.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>紐西蘭</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=新西蘭" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic22.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>波蘭</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=波蘭" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic23.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>澳大利亞</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=澳大利亞" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic24.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>西班牙</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=西班牙" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic25.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>南非</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=南非" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
					
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic26.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>瑞典</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=瑞典" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic27.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>希臘</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=希臘" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic28.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>泰國</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=泰國" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic29.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>阿聯酋</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=阿聯酋" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic30.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>捷克</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=捷克" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/pic31.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>2020年5月最新推薦</p>
										<h2>俄羅斯</h2>
									</header>
									<h4> 去年有以無差別殺人事件點題的社會寫實劇《我們與惡的距離》成為台劇新天花板，今年一開始，則由推理懸疑愛情劇《想見你》殺出重圍，用穿越劇包裝青春期的自我價值認同與矛盾脆弱的人生軌跡，故事情節反轉再反轉，劇中主角許光漢與柯佳嬿，分別一人分飾兩角，細膩而精湛的演技讓人相當驚豔，也透出近年來台劇逐漸展露全新創造力的光暈。</h4>
									<footer class="align-center">
										<a href="fullmotion/index.php?area_name=俄羅斯" class="button alt">更多推薦</a>
									</footer>
								</div>
							</div>
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
					&copy; 搜劇Film Seeker.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>';
}
?>

