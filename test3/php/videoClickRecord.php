<?php
session_start();
include '../php/DataBase.php';
if (isset($_SESSION["acc"])&&$_SESSION["acc"]!="") {
    if (isset($_GET["video_id"])) {
        $acc = $_SESSION["acc"];
        $video_id = $_GET["video_id"];
        $db = DB1();
        $sql = "INSERT INTO member_search_record(account,video_id,search_time) VALUES ('$acc','$video_id', NOW())";
        $db->exec($sql)or die ("無法新增".mysqli_error($db)); //執行sql語法
    }
}
header('Location: ../fullmotion/introduction.php?video_name='.$_GET["video_name"].'&video_id='.$_GET["video_id"].'&area_name='.$_GET["area_name"].'');
?>