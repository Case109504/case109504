<?php
session_start();
include '../php/DataBase.php';
if (isset($_SESSION["acc"])&&$_SESSION["acc"]!="") {
    if (isset($_GET["video_id"])) {
        $db = DB1();
        $sql="SELECT * FROM testdb1.member_video_list
        where account = '" . $_SESSION["acc"]."'";
        $result = $db->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $result->execute();
        while($row = $result->fetch()){ 
            if($_GET["video_id"]==$row["video_id"]){
                $_SESSION["sure"] = 0;
                echo '<script language="JavaScript">;alert("已有該影片紀錄");location.href="../fullmotion/introduction.php?video_name='.$_GET["video_name"].'&video_id='.$_GET["video_id"].'&area_name='.$_GET["area_name"].'";</script>';
            }else{
                $_SESSION["sure"] = 1;
            }
        }
        if ($_SESSION["sure"] == 1){
            $acc = $_SESSION["acc"];
            $video_id = $_GET["video_id"];
            $db = DB1();
            $sql = "INSERT INTO member_video_list(account,video_id) VALUES ('$acc','$video_id')";
            $db->exec($sql);
            echo '<script language="JavaScript">;alert("已加入影片清單");location.href="../fullmotion/introduction.php?video_name='.$_GET["video_name"].'&video_id='.$_GET["video_id"].'&area_name='.$_GET["area_name"].'";</script>';
        }
        
    }
}else{
    echo '<script language="JavaScript">;alert("未登入使用者");location.href="../fullmotion/introduction.php?video_name='.$_GET["video_name"].'&video_id='.$_GET["video_id"].'&area_name='.$_GET["area_name"].'";</script>';
}
?>