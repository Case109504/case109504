<?php

session_start();

require "vendor/autoload.php";


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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>搜尋結果</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        body, html {
            height: 100%;
        }
        .bg {
            background-image: url("images/bg2.jpg");
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