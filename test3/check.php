<?php

session_start();

require "vendor/autoload.php";

  $hostname = "140.131.115.87:3306";
  $username = "root";
  $password = "109504109504";
  $databasename = "testdb1";
  
  // 創建連接
  //$cn = new mysqli($hostname,$username,$password,$databasename);
  
  //if (!$cn)//判斷連線是否為空
  //{
  //die("連線錯誤: " . mysqli_connect_error());//連線失敗 列印錯誤日誌
  //}
  //$cn->query("SET NAMES utf8");//設定 字符集為utf8格式
  //$cn->select_db("picture (test)");//選擇要操作的資料表

  //$sql="insert into picturetest(picture)values(%s),'".$_FILES."'";   
  //mysqli_query($cn,$sql);    //傳入資料庫連線引數，sql字串。
  //$res=$cn->query($sql);    //接收查詢產生的結果集
  
            //將結果集賦值給陣列物件

use Google\Cloud\Vision\VisionClient;
$vision = new VisionClient(['keyFile' => json_decode(file_get_contents("key.json"), true)]);

$familyPhotoResource = fopen($_FILES['image']['tmp_name'], 'r');

$image = $vision->image($familyPhotoResource, 
    ['FACE_DETECTION','WEB_DETECTION']);
$result = $vision->annotate($image);

if ($result) {
    $imagetoken = random_int(1111111, 999999999);
    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/feed/' . $imagetoken . ".jpg");
} else {
    header("location: imageSearch.html");
    die();
}

$faces = $result->faces();
$web = $result->web();


?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <title>搜尋結果</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/028c714c47.js" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
        }
        header, menu{
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            font-family: arial,"Microsoft JhengHei","微軟正黑體",sans-serif !important;
        }

        header, menu{
		display: block;
	    }
        /* Header */

        body.subpage {
                padding-top: 3.25em;
            }

            @-moz-keyframes reveal-header {
                0% {
                    top: -4em;
                    opacity: 0;
                }

                100% {
                    top: 0;
                    opacity: 1;
                }
            }

            @-webkit-keyframes reveal-header {
                0% {
                    top: -4em;
                    opacity: 0;
                }

                100% {
                    top: 0;
                    opacity: 1;
                }
            }

            @-ms-keyframes reveal-header {
                0% {
                    top: -4em;
                    opacity: 0;
                }

                100% {
                    top: 0;
                    opacity: 1;
                }
            }

            @keyframes reveal-header {
                0% {
                    top: -4em;
                    opacity: 0;
                }

                100% {
                    top: 0;
                    opacity: 1;
                }
            }

            #header {
                background: rgba(0, 0, 0, 0.975);
                color: #a6a6a6;
                cursor: default;
                height: 3.25em;
                left: 0;
                line-height: 3.25em;
                position: fixed;
                text-align: right;
                top: 0;
                width: 100%;
                z-index: 10001;
            }

                #header > .logo {
                    display: inline-block;
                    height: inherit;
                    left: 1.25em;
                    line-height: inherit;
                    margin: 0;
                    padding: 0;
                    position: absolute;
                    top: 0;
                }

                    #header > .logo a {
                        font-size: 1.25em;
                        color: #FFF;
                        text-decoration: none;
                    }

                        #header > .logo a:hover {
                            color: rgba(255, 255, 255, 0.65);
                        }

                    #header > .logo span {
                        font-weight: 400;
                        font-size: .8em;
                        color: rgba(255, 255, 255, 0.65);
                    }

                #header > a {
                    -moz-transition: color 0.2s ease-in-out;
                    -webkit-transition: color 0.2s ease-in-out;
                    -ms-transition: color 0.2s ease-in-out;
                    transition: color 0.2s ease-in-out;
                    display: inline-block;
                    padding: 0 0.75em;
                    color: inherit;
                    text-decoration: none;
                    color: #FFF;
                }

                    #header > a:hover {
                        color: #f2f2f2;
                    }

                    #header > a[href="#menu"] {
                        text-decoration: none;
                        -webkit-tap-highlight-color: transparent;
                    }

                        #header > a[href="#menu"]:before {
                            content: "";
                            -moz-osx-font-smoothing: grayscale;
                            -webkit-font-smoothing: antialiased;
                            font-family: FontAwesome;
                            font-style: normal;
                            font-weight: normal;
                            text-transform: none !important;
                        }

                        #header > a[href="#menu"]:before {
                            margin: 0 0.5em 0 0;
                        }

                    #header > a + a[href="#menu"]:last-child {
                        border-left: solid 1px rgba(0, 0, 0, 0.15);
                        padding-left: 1.25em;
                        margin-left: 0.5em;
                    }

                    #header > a:last-child {
                        padding-right: 1.25em;
                    }

                    @media screen and (max-width: 736px) {

                        #header > a {
                            padding: 0 0.5em;
                        }

                            #header > a + a[href="#menu"]:last-child {
                                padding-left: 1em;
                                margin-left: 0.25em;
                            }

                            #header > a:last-child {
                                padding-right: 1em;
                            }

                    }

                #header.reveal {
                    -moz-animation: reveal-header 0.5s ease;
                    -webkit-animation: reveal-header 0.5s ease;
                    -ms-animation: reveal-header 0.5s ease;
                    animation: reveal-header 0.5s ease;
                }

                #header.alt {
                    -moz-animation: none;
                    -webkit-animation: none;
                    -ms-animation: none;
                    animation: none;
                    background-color: transparent;
                    box-shadow: none;
                    overflow: hidden;
                    position: absolute;
                    top: 1.5em;
                }

                    #header.alt h1 {
                        left: 2.5em;
                    }

                    #header.alt nav {
                        right: 2.5em;
                    }

            @media screen and (max-width: 980px) {

                body.subpage {
                    padding-top: 44px;
                }

                #header {
                    height: 44px;
                    line-height: 44px;
                }

                    #header > h1 {
                        left: 1em;
                    }

                        #header > h1 a {
                            font-size: 1em;
                        }

            }

            @media screen and (max-width: 480px) {

                #header {
                    min-width: 320px;
                }

            }        

        /* Menu */

        #menu {
                -moz-transform: translateX(20rem);
                -webkit-transform: translateX(20rem);
                -ms-transform: translateX(20rem);
                transform: translateX(20rem);
                -moz-transition: -moz-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
                -webkit-transition: -webkit-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
                -ms-transition: -ms-transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
                transition: transform 0.5s ease, box-shadow 0.5s ease, visibility 0.5s;
                -webkit-overflow-scrolling: touch;
                background: rgba(0, 0, 0, 0.95);
                box-shadow: none;
                color: #000;
                height: 100%;
                max-width: 80%;
                overflow-y: auto;
                padding: 3rem 2rem;
                position: fixed;
                right: 0;
                top: 0;
                visibility: hidden;
                width: 20rem;
                z-index: 10002;
        }

        #menu > ul {
            margin: 0 0 1rem 0;
        }

        #menu > ul.links {
            list-style: none;
            padding: 0;
        }

        #menu > ul.links > li {
            padding: 0;
        }

        #menu > ul.links > li > a:not(.button) {
            border: 0;
            border-top: solid 1px rgba(255, 255, 255, 0.125);
            color: rgba(255, 255, 255, 0.5);
            display: block;
            line-height: 3.5rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        #menu > ul.links > li > a:not(.button):hover {
            color: #FFF;
        }

                            #menu > ul.links > li > .button {
                                display: block;
                                margin: 0.5rem 0 0 0;
                            }

                            #menu > ul.links > li:first-child > a:not(.button) {
                                border-top: 0 !important;
                            }

                #menu .close {
                    text-decoration: none;
                    -moz-transition: color 0.2s ease-in-out;
                    -webkit-transition: color 0.2s ease-in-out;
                    -ms-transition: color 0.2s ease-in-out;
                    transition: color 0.2s ease-in-out;
                    -webkit-tap-highlight-color: transparent;
                    border: 0;
                    color: #999999;
                    cursor: pointer;
                    display: block;
                    height: 3.25rem;
                    line-height: 3.25rem;
                    padding-right: 1.25rem;
                    position: absolute;
                    right: 0;
                    text-align: right;
                    top: 0;
                    vertical-align: middle;
                    width: 7rem;
                }

                    #menu .close:before {
                        -moz-osx-font-smoothing: grayscale;
                        -webkit-font-smoothing: antialiased;
                        font-family: FontAwesome;
                        font-style: normal;
                        font-weight: normal;
                        text-transform: none !important;
                    }

                    #menu .close:before {
                        content: '\f00d';
                        font-size: 1.25rem;
                    }

                    #menu .close:hover {
                        color: #000;
                    }

                    @media screen and (max-width: 736px) {

                        #menu .close {
                            height: 4rem;
                            line-height: 4rem;
                        }

                    }

                #menu.visible {
                    -moz-transform: translateX(0);
                    -webkit-transform: translateX(0);
                    -ms-transform: translateX(0);
                    transform: translateX(0);
                    box-shadow: 0 0 1.5rem 0 rgba(0, 0, 0, 0.2);
                    visibility: visible;
                }

                @media screen and (max-width: 736px) {

        #menu {
                padding: 2.5rem 1.75rem;
            }

        }        
        .bg {
            /*background-image: url("images/bg2.jpg");*/
            background-color: #000000;
            height: 100%;
            /*background-position: center;*/
            background-repeat: no-repeat;
            /*background-size: cover;*/
        }
        .container-fluid  {
            margin-bottom: 50px;
        }
    </style>
</head>
<body class="bg">
     <!-- Header -->
        <header id="header" class="alt">
            <div class="logo"><a href="home.html">搜劇Film Seeker <span></span></a></div>
            </div>
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
                    <li><a href="templated-privy/membersonly.php">會員功能</a></li>
                    <li><a href="php/logOut.php">登出</a></li>
                </ul>
            </nav>
    <div class="container-fluid" style="max-width: 1080px;">
   
        <br><br><br>
        <div class="row">
            <div class="col-md-12" style="margin: auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888">

                <div class="panel-heading">
                    <h2><a href="/">分析結果</a></h2>
                    <p style="font-style: italic;">選擇您滿意的搜尋結果 我們將給予最完整的影視資訊</p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-4" style="text-align: center;">
                        <img class="img-thumbnail" src="<?php 
                            if ($faces == null) {
                                echo "/feed/" . $imagetoken . ".jpg";
                            } else {
                                echo "image.php?token=$imagetoken";
                            }
                        ?>" alt="Analysed Image">
                        
                    </div>
                    <div class="col-md-8 border" style="padding: 10px;">
                        <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
                            
                            <li class="nav-item">
                                <a href="#pills-web" role="tab" class="nav-link active" id="pills-web-tab" data-toggle="pill" aria-controls="pills-web" aria-selected="true">Web</a>
                            </li>

                        </ul>
                        <hr>


                        <div class="tab-content" id="pills-tabContent">
                           
                            <div class="tab-pane fade show active" id="pills-web" role="tabpanel" aria-labelledby="pills-web-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <?php include "web.php" ;?>
                                        <?php include "faces.php" ;?>
                                    </div>
                                </div>
                            </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>