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
						<p class="special"><b>泰國、越南、印尼、印度、美國、英國、法國、德國、義大利等多國影劇任您挑選</b></p>
						<h2>多國劇種</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
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
									<h4> 美劇推薦＋Netflix 必看精選神劇推介又來啦！煲劇是一種生活態度，繁忙過後拋下所有辛勞躺在床上放空自己。隨意地點選一套劇集，讓情緒跟著劇中的主角遊走，時而緊張、時而浪漫。近年醉心於美劇的死忠粉絲卻依然地死忠，今天就讓小編整合一系列美劇推介＋Netflix 必看神劇精選！無論懸疑、科幻片、偵探、犯罪的劇還是美劇好看！</h4>
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
									<h4> 近年來，港劇的質素每況愈下是個不爭的事實。港劇從小看到大，哪怕近幾年不被看好的TVB的很多新劇，我都還是基本沒有落下。現代法政劇和警匪劇，我覺得港劇的這類題材一直都拍得既有質量又有感覺。現代題材中科技成分都比較多，而科技發展日新月異，基本上回看兩年前的劇，裡面的一些跟科技相關的內容就會覺得太過時了，特別是一些刑偵手段相關的。</h4>
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
									<h4> 肺炎全球疫情肆虐 ，好多人都宅在家不出門 ，以往約會休閒娛樂用的電影院、劇院、演唱會...目前都得暫時靠邊跟它們說掰掰 ，現在宅著隔絕毒害「追劇」才是王道 。在這閉關宵禁共體時艱的時候 ，想不想換換口味看看法國人平時都在追那些熱門本土法語影集?為大家推薦一下近年真的必追的五部「優質法國影集」，每一部都能讓您心靈獲得舒緩滿足，加強對抗病毒侵擾的勇氣！</h4>
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
									<h4> 義大利電影在世界電影史上具有舉足輕重的地位，很多小電影公司分別在都靈、米蘭、羅馬、那不勒斯和威尼斯等地紛紛建立起來。義大利電影以浪漫和迷人而聞名，電影中的角色往往能夠反映義大利人豪爽不修邊幅的性格，又能看到當地的美麗景色與美食；做為一個義大利語的愛好者，通過電影了解當地文化，滲透語言學習，不失為一個寓教於樂的好方法。	</h4>
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
									<h4> 在影視劇領域裡，英劇一直是一個不得不提的特殊存在，英倫風範短小精悍熱衷自黑，英劇擁有著一個又一個有趣的屬性，其神奇的腦洞，主流的價值觀，收穫了一代又一代的國人粉絲，是海外劇中擁有相當高人氣的存在。今天，我來給大家介紹一些，好看到令我戰慄的英劇~希望大家喜歡~英倫劇集，讓我看到了英國人的紳士風範以及嚴謹的工匠精神! </h4>
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
									<h4> 又一個秋季檔來臨，老劇回歸，新劇湧現，如果你看膩了英劇美劇，現在給你推薦相對小眾的加拿大劇。加拿大和美國頻繁的文化輸出不同，國內引入的電視劇電影相對較少，在此給大家推薦一些熱度和評價較好的加拿大劇集。加拿大因為近一半國土面積常年大雪，一直有雪國之稱，劇情背景基於大雪環境還是別國做不到的，喜歡驚悚兇殺的類型的極力推薦。	</h4>
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
									<h4> 《白日夢冒險王》在冰島取景的壯闊場面，對比於人物的渺小產生令人印象深刻的影像對比，讓人欣賞完電影後對冰島自助旅遊產生憧憬之感油然而生，是冰島最受歡迎的自駕路線。由於冰島地廣人稀，景點與景點之間的距離也都需要一天左右的開車距離，決定前往冰島自駕壯遊如果想玩得盡興，建議安排10天左右的假期停留在冰島進行自我放逐。</h4>
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
									<h4> 印度的高分電影在大家印象里似乎都以喜劇為主，像大家熟悉的《三傻大鬧寶萊塢》、《摔跤吧！爸爸》、《廁所英雄》之類的，還總是被評價“一言不合就尬舞”。但其實，印度的懸疑電影也有不少寶藏。提起懸疑片，很多人第一時間想到的可能是歐美片或者是韓國電影。不過喜歡看電影的朋友應該都知道，近些年來印度的懸疑電影也逐漸進入大眾視野，並且備受好評。</h4>
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
									<h4> 瑞士劇推薦＋Netflix 必看精選神劇推介又來啦！煲劇是一種生活態度，繁忙過後拋下所有辛勞躺在床上放空自己。隨意地點選一套劇集，讓情緒跟著劇中的主角遊走，時而緊張、時而浪漫。近年醉心於美劇的死忠粉絲卻依然地死忠，今天就讓小編整合一系列瑞士劇推介＋Netflix 必看神劇精選！無論懸疑、科幻片、偵探、犯罪的劇還是瑞士劇好看！</h4>
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
									<h4> 肺炎全球疫情肆虐 ，好多人都宅在家不出門 ，以往約會休閒娛樂用的電影院、劇院、演唱會...目前都得暫時靠邊跟它們說掰掰 ，現在宅著隔絕毒害「追劇」才是王道 。在這閉關宵禁共體時艱的時候 ，想不想換換口味看看德國人平時都在追那些熱門本土德語影集?為大家推薦一下近年真的必追的五部「優質德國影集」，每一部都能讓您心靈獲得舒緩滿足，加強對抗病毒侵擾的勇氣！</h4>
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
									<h4> 又一個秋季檔來臨，老劇回歸，新劇湧現，如果你看膩了英劇美劇，現在給你推薦相對小眾的紐西蘭劇。紐西蘭和美國頻繁的文化輸出不同，國內引入的電視劇電影相對較少，在此給大家推薦一些熱度和評價較好的紐西蘭劇集。紐西蘭因為近一半國土面積常年大雪，一直有雪國之稱，劇情背景基於大雪環境還是別國做不到的，喜歡驚悚兇殺的類型的極力推薦。</h4>
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
									<h4> 在影視劇領域裡，波蘭劇一直是一個不得不提的特殊存在，波蘭風範短小精悍熱衷自黑，波蘭劇擁有著一個又一個有趣的屬性，其神奇的腦洞，主流的價值觀，收穫了一代又一代的國人粉絲，是海外劇中擁有相當高人氣的存在。今天，我來給大家介紹一些，好看到令我戰慄的波蘭劇~希望大家喜歡~波瀾劇集，讓我看到了波蘭人的紳士風範以及嚴謹的工匠精神! </h4>
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
									<h4> 澳大利亞電影在世界電影史上具有舉足輕重的地位，很多小電影公司分別在都靈、米蘭、羅馬、那不勒斯和威尼斯等地紛紛建立起來。澳大利亞電影以浪漫和迷人而聞名，電影中的角色往往能夠反映澳大利亞人豪爽不修邊幅的性格，又能看到當地的美麗景色與美食；做為一個澳大利亞語的愛好者，通過電影了解當地文化，滲透語言學習，不失為一個寓教於樂的好方法。</h4>
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
									<h4> 又一個秋季檔來臨，老劇回歸，新劇湧現，如果你看膩了英劇美劇，現在給你推薦相對小眾的西班牙劇。西班牙和美國頻繁的文化輸出不同，國內引入的電視劇電影相對較少，在此給大家推薦一些熱度和評價較好的西班牙劇集。西班牙因為近一半國土面積常年大雪，一直有雪國之稱，劇情背景基於大雪環境還是別國做不到的，喜歡驚悚兇殺的類型的極力推薦。</h4>
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
									<h4> 南非的高分電影在大家印象里似乎都以喜劇為主，像大家熟悉的《三傻大鬧寶萊塢》、《摔跤吧！爸爸》、《廁所英雄》之類的，還總是被評價“一言不合就尬舞”。但其實，南非的懸疑電影也有不少寶藏。提起懸疑片，很多人第一時間想到的可能是歐美片或者是韓國電影。不過喜歡看電影的朋友應該都知道，近些年來南非的懸疑電影也逐漸進入大眾視野，並且備受好評。</h4>
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
									<h4> 近年來，瑞典劇的質素每況愈下是個不爭的事實。瑞典劇從小看到大，哪怕近幾年不被看好的TVB的很多新劇，我都還是基本沒有落下。現代法政劇和警匪劇，我覺得瑞典劇的這類題材一直都拍得既有質量又有感覺。現代題材中科技成分都比較多，而科技發展日新月異，基本上回看兩年前的劇，裡面的一些跟科技相關的內容就會覺得太過時了，特別是一些刑偵手段相關的。</h4>
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
									<h4> 在影視劇領域裡，希臘劇一直是一個不得不提的特殊存在，希臘風範短小精悍熱衷自黑，希臘劇擁有著一個又一個有趣的屬性，其神奇的腦洞，主流的價值觀，收穫了一代又一代的國人粉絲，是海外劇中擁有相當高人氣的存在。今天，我來給大家介紹一些，好看到令我戰慄的希臘劇~希望大家喜歡~希臘劇集，讓我看到了希臘人的紳士風範以及嚴謹的工匠精神! </h4>
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
									<h4> 情人節快到了，武漢肺炎攪局，和另一半窩在家裡看片度過也是不錯的選擇！也稍微藉著甜蜜節日緩解一下最近緊繃的情緒。不管你是單身、死會還是結婚生子想找回生活中浪漫的粉色泡泡，VISION THAI 看見泰國小編整理好12部經典泰國愛情電影片單，讓你的西洋情人節和泰國料理一樣，戀愛中的酸甜苦辣都有，趕快收藏起來吧！</h4>
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
									<h4> 肺炎全球疫情肆虐 ，好多人都宅在家不出門 ，以往約會休閒娛樂用的電影院、劇院、演唱會...目前都得暫時靠邊跟它們說掰掰 ，現在宅著隔絕毒害追劇才是王道 。在這閉關宵禁共體時艱的時候 ，想不想換換口味看看阿聯酋人平時都在追那些熱門本土阿聯酋語影集?為大家推薦一下近年真的必追的五部優質阿聯酋國影集！</h4>
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
									<h4> 布拉格是個充滿藝術氣息的城市。來這裡, 除了看古蹟, 看建築, 更多人不會錯過的是這裡的藝文活動。黑光劇(Black Theater) 黑光劇是捷克戲劇活動中最特殊、知名度也最高的一種。舞台的佈景和演員的服裝都是全黑的，正式演出時，是以彩色的燈光束投射，搭配演員手中的螢光道具，再加上音樂，所呈現出來的奇妙視覺影像。</h4>
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
									<h4> 自從 Bilibili 下架俄劇、小鴨影音被封了後，想看俄國影集學俄文就變得很困難嗎？ 沒關係！小俄幫你整理好俄劇推薦清單，並附上中字片源，讓你邊追俄劇邊開心學俄文！一邊認識俄國文化，還可以學習俄國俚語。劇情雖然有些灑狗血、八點檔，但是很輕鬆有趣，配角的人物特質也很鮮明，讓整部片十分爆笑！</h4>
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
						<p class="special"><b>泰國、越南、印尼、印度、美國、英國、法國、德國、義大利等多國影劇任您挑選</b></p>
						<h2>多國劇種</h2>
					</header>
				</div>
			</section>

			<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
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
									<h4> 美劇推薦＋Netflix 必看精選神劇推介又來啦！煲劇是一種生活態度，繁忙過後拋下所有辛勞躺在床上放空自己。隨意地點選一套劇集，讓情緒跟著劇中的主角遊走，時而緊張、時而浪漫。近年醉心於美劇的死忠粉絲卻依然地死忠，今天就讓小編整合一系列美劇推介＋Netflix 必看神劇精選！無論懸疑、科幻片、偵探、犯罪的劇還是美劇好看！</h4>
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
									<h4> 近年來，港劇的質素每況愈下是個不爭的事實。港劇從小看到大，哪怕近幾年不被看好的TVB的很多新劇，我都還是基本沒有落下。現代法政劇和警匪劇，我覺得港劇的這類題材一直都拍得既有質量又有感覺。現代題材中科技成分都比較多，而科技發展日新月異，基本上回看兩年前的劇，裡面的一些跟科技相關的內容就會覺得太過時了，特別是一些刑偵手段相關的。</h4>
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
									<h4> 肺炎全球疫情肆虐 ，好多人都宅在家不出門 ，以往約會休閒娛樂用的電影院、劇院、演唱會...目前都得暫時靠邊跟它們說掰掰 ，現在宅著隔絕毒害「追劇」才是王道 。在這閉關宵禁共體時艱的時候 ，想不想換換口味看看法國人平時都在追那些熱門本土法語影集?為大家推薦一下近年真的必追的五部「優質法國影集」，每一部都能讓您心靈獲得舒緩滿足，加強對抗病毒侵擾的勇氣！</h4>
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
									<h4> 義大利電影在世界電影史上具有舉足輕重的地位，很多小電影公司分別在都靈、米蘭、羅馬、那不勒斯和威尼斯等地紛紛建立起來。義大利電影以浪漫和迷人而聞名，電影中的角色往往能夠反映義大利人豪爽不修邊幅的性格，又能看到當地的美麗景色與美食；做為一個義大利語的愛好者，通過電影了解當地文化，滲透語言學習，不失為一個寓教於樂的好方法。	</h4>
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
									<h4> 在影視劇領域裡，英劇一直是一個不得不提的特殊存在，英倫風範短小精悍熱衷自黑，英劇擁有著一個又一個有趣的屬性，其神奇的腦洞，主流的價值觀，收穫了一代又一代的國人粉絲，是海外劇中擁有相當高人氣的存在。今天，我來給大家介紹一些，好看到令我戰慄的英劇~希望大家喜歡~英倫劇集，讓我看到了英國人的紳士風範以及嚴謹的工匠精神! </h4>
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
									<h4> 又一個秋季檔來臨，老劇回歸，新劇湧現，如果你看膩了英劇美劇，現在給你推薦相對小眾的加拿大劇。加拿大和美國頻繁的文化輸出不同，國內引入的電視劇電影相對較少，在此給大家推薦一些熱度和評價較好的加拿大劇集。加拿大因為近一半國土面積常年大雪，一直有雪國之稱，劇情背景基於大雪環境還是別國做不到的，喜歡驚悚兇殺的類型的極力推薦。	</h4>
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
									<h4> 《白日夢冒險王》在冰島取景的壯闊場面，對比於人物的渺小產生令人印象深刻的影像對比，讓人欣賞完電影後對冰島自助旅遊產生憧憬之感油然而生，是冰島最受歡迎的自駕路線。由於冰島地廣人稀，景點與景點之間的距離也都需要一天左右的開車距離，決定前往冰島自駕壯遊如果想玩得盡興，建議安排10天左右的假期停留在冰島進行自我放逐。</h4>
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
									<h4> 印度的高分電影在大家印象里似乎都以喜劇為主，像大家熟悉的《三傻大鬧寶萊塢》、《摔跤吧！爸爸》、《廁所英雄》之類的，還總是被評價“一言不合就尬舞”。但其實，印度的懸疑電影也有不少寶藏。提起懸疑片，很多人第一時間想到的可能是歐美片或者是韓國電影。不過喜歡看電影的朋友應該都知道，近些年來印度的懸疑電影也逐漸進入大眾視野，並且備受好評。</h4>
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
									<h4> 瑞士劇推薦＋Netflix 必看精選神劇推介又來啦！煲劇是一種生活態度，繁忙過後拋下所有辛勞躺在床上放空自己。隨意地點選一套劇集，讓情緒跟著劇中的主角遊走，時而緊張、時而浪漫。近年醉心於美劇的死忠粉絲卻依然地死忠，今天就讓小編整合一系列瑞士劇推介＋Netflix 必看神劇精選！無論懸疑、科幻片、偵探、犯罪的劇還是瑞士劇好看！</h4>
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
									<h4> 肺炎全球疫情肆虐 ，好多人都宅在家不出門 ，以往約會休閒娛樂用的電影院、劇院、演唱會...目前都得暫時靠邊跟它們說掰掰 ，現在宅著隔絕毒害「追劇」才是王道 。在這閉關宵禁共體時艱的時候 ，想不想換換口味看看德國人平時都在追那些熱門本土德語影集?為大家推薦一下近年真的必追的五部「優質德國影集」，每一部都能讓您心靈獲得舒緩滿足，加強對抗病毒侵擾的勇氣！</h4>
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
									<h4> 又一個秋季檔來臨，老劇回歸，新劇湧現，如果你看膩了英劇美劇，現在給你推薦相對小眾的紐西蘭劇。紐西蘭和美國頻繁的文化輸出不同，國內引入的電視劇電影相對較少，在此給大家推薦一些熱度和評價較好的紐西蘭劇集。紐西蘭因為近一半國土面積常年大雪，一直有雪國之稱，劇情背景基於大雪環境還是別國做不到的，喜歡驚悚兇殺的類型的極力推薦。</h4>
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
									<h4> 在影視劇領域裡，波蘭劇一直是一個不得不提的特殊存在，波蘭風範短小精悍熱衷自黑，波蘭劇擁有著一個又一個有趣的屬性，其神奇的腦洞，主流的價值觀，收穫了一代又一代的國人粉絲，是海外劇中擁有相當高人氣的存在。今天，我來給大家介紹一些，好看到令我戰慄的波蘭劇~希望大家喜歡~波瀾劇集，讓我看到了波蘭人的紳士風範以及嚴謹的工匠精神! </h4>
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
									<h4> 澳大利亞電影在世界電影史上具有舉足輕重的地位，很多小電影公司分別在都靈、米蘭、羅馬、那不勒斯和威尼斯等地紛紛建立起來。澳大利亞電影以浪漫和迷人而聞名，電影中的角色往往能夠反映澳大利亞人豪爽不修邊幅的性格，又能看到當地的美麗景色與美食；做為一個澳大利亞語的愛好者，通過電影了解當地文化，滲透語言學習，不失為一個寓教於樂的好方法。</h4>
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
									<h4> 又一個秋季檔來臨，老劇回歸，新劇湧現，如果你看膩了英劇美劇，現在給你推薦相對小眾的西班牙劇。西班牙和美國頻繁的文化輸出不同，國內引入的電視劇電影相對較少，在此給大家推薦一些熱度和評價較好的西班牙劇集。西班牙因為近一半國土面積常年大雪，一直有雪國之稱，劇情背景基於大雪環境還是別國做不到的，喜歡驚悚兇殺的類型的極力推薦。</h4>
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
									<h4> 南非的高分電影在大家印象里似乎都以喜劇為主，像大家熟悉的《三傻大鬧寶萊塢》、《摔跤吧！爸爸》、《廁所英雄》之類的，還總是被評價“一言不合就尬舞”。但其實，南非的懸疑電影也有不少寶藏。提起懸疑片，很多人第一時間想到的可能是歐美片或者是韓國電影。不過喜歡看電影的朋友應該都知道，近些年來南非的懸疑電影也逐漸進入大眾視野，並且備受好評。</h4>
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
									<h4> 近年來，瑞典劇的質素每況愈下是個不爭的事實。瑞典劇從小看到大，哪怕近幾年不被看好的TVB的很多新劇，我都還是基本沒有落下。現代法政劇和警匪劇，我覺得瑞典劇的這類題材一直都拍得既有質量又有感覺。現代題材中科技成分都比較多，而科技發展日新月異，基本上回看兩年前的劇，裡面的一些跟科技相關的內容就會覺得太過時了，特別是一些刑偵手段相關的。</h4>
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
									<h4> 在影視劇領域裡，希臘劇一直是一個不得不提的特殊存在，希臘風範短小精悍熱衷自黑，希臘劇擁有著一個又一個有趣的屬性，其神奇的腦洞，主流的價值觀，收穫了一代又一代的國人粉絲，是海外劇中擁有相當高人氣的存在。今天，我來給大家介紹一些，好看到令我戰慄的希臘劇~希望大家喜歡~希臘劇集，讓我看到了希臘人的紳士風範以及嚴謹的工匠精神! </h4>
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
									<h4> 情人節快到了，武漢肺炎攪局，和另一半窩在家裡看片度過也是不錯的選擇！也稍微藉著甜蜜節日緩解一下最近緊繃的情緒。不管你是單身、死會還是結婚生子想找回生活中浪漫的粉色泡泡，VISION THAI 看見泰國小編整理好12部經典泰國愛情電影片單，讓你的西洋情人節和泰國料理一樣，戀愛中的酸甜苦辣都有，趕快收藏起來吧！</h4>
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
									<h4>  肺炎全球疫情肆虐 ，好多人都宅在家不出門 ，以往約會休閒娛樂用的電影院、劇院、演唱會...目前都得暫時靠邊跟它們說掰掰 ，現在宅著隔絕毒害追劇才是王道 。在這閉關宵禁共體時艱的時候 ，想不想換換口味看看阿聯酋人平時都在追那些熱門本土阿聯酋語影集?為大家推薦一下近年真的必追的五部優質阿聯酋國影集！</h4>
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
									<h4> 布拉格是個充滿藝術氣息的城市。來這裡, 除了看古蹟, 看建築, 更多人不會錯過的是這裡的藝文活動。黑光劇(Black Theater) 黑光劇是捷克戲劇活動中最特殊、知名度也最高的一種。舞台的佈景和演員的服裝都是全黑的，正式演出時，是以彩色的燈光束投射，搭配演員手中的螢光道具，再加上音樂，所呈現出來的奇妙視覺影像。</h4>
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
									<h4> 自從 Bilibili 下架俄劇、小鴨影音被封了後，想看俄國影集學俄文就變得很困難嗎？ 沒關係！小俄幫你整理好俄劇推薦清單，並附上中字片源，讓你邊追俄劇邊開心學俄文！一邊認識俄國文化，還可以學習俄國俚語。劇情雖然有些灑狗血、八點檔，但是很輕鬆有趣，配角的人物特質也很鮮明，讓整部片十分爆笑！</h4>
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

