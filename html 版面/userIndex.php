<!doctype html>
<?php
session_start();
include '../php/FindOrder.php';
if ($_SESSION["acc"] == "") {
    header('Location: maneger.php');
    $_SESSION["unLog"] = true;
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>管理者介面</title>
        <!-- 連結思源中文及css -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
        <link href="../../images/user.jpg" rel="icon">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/menu.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!------------------------->
    </head>

    <body>

        <!-- Header -->
        <header id="header" class="alt">
            <div class="logo"><a href="../index/index.html">TaipeiMRT </a></div>
            <a href="#menu">Menu</a>
        </header>

           <!-- Nav -->
        <nav id="menu">
            <ul class="links">
            <li><a href="../../news/news.html">最新消息</a></li>
                <li><a href="../../room/room.php">\服務</a></li>
                <li><a href="../../room/roomSpace.php">查詢行程</a></li>
                <li><a href="../../about/about.html">關於我們</a></li>
                <li><a href="../../information/information.php">聯絡資訊</a></li>

                <li style="margin-top: 200%"><a href="../maneger/maneger.php">管理者介面</a></li>
                <li style="margin-top: 0%"><a href="../maneger/php/logOut.php">登出</a></li>    
            </ul>
        </nav>

        <section id="One" class="wrapper style3">
            <div class="inner" style="z-index: 1">
                <header class="align-center">
                    <h2>Maneger Page</h2>
                </header>
            </div>
        </section>

         <!--**************************-->
        <div class ="nav">
            <ul id="navigation" style="z-index: 2; background:#006AB2;">        
                <li><a href="userIndex.php" style="color:#000; ">主頁</a></li>            

                <li class="sub">         
                    <a href="#" style="color:#000; ">會員</a>          
                    <ul style="z-index: 2; ">          
                        <li><a href="customer/add.php">新增</a></li>                 
                        <li><a href="customer/delete.php">刪除</a></li>
                        <li><a href="customer/change.php">更新</a></li>                       
                    </ul>
                </li>              

                <li class="sub">         
                    <a href="#" style="color:#000; ">管理員</a>          
                    <ul style="z-index: 2">          
                        <li><a href="employee/add.php">新增</a></li>
                        <li><a href="employee/delete.php">刪除</a></li>
                        <li><a href="employee/change.php">更新</a></li>                   
                    </ul>
                </li>     

                <li class="sub">         
                    <a href="#" style="color:#000; ">行程</a>          
                    <ul style="z-index: 2">          
                        <li><a href="order/delete.php">刪除</a></li>
                        <li><a href="order/change.php">更新</a></li>                   
                    </ul>
                </li> 
                

                   

            </ul>
        </div>



        <div class="container">          


            <!--~~~~~~~~~~~~~~~~~--> 
            <div class="content">
                <h2>歡迎<?php echo $_SESSION["acc"]; ?></h2>
                <p><?php echo date('Y-M-D'); ?></p>


            </div>       

            <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

        </div>


        <!--~~~~~~~~~~~~~~~~~--> 
        <div class="footer">
            <ul style="z-index: 2; background:#7AB51D;"> 
                &copy; NTUB GROUP
            </ul>    

        </div>  
        <!--**************************-->    
    </body>

</html>
