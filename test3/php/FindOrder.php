<?php

include 'DataBase.php';

function AddVideo($video_name, $area_id, $introduction) {
    $db = DB1();
    $sql = "INSERT INTO video(video_name,area_id,introduction) VALUES ('$video_name','$area_id','$introduction')";
    $db->exec($sql)or die ("無法新增".mysqli_error($db)); //執行sql語法
    header("Location:video_select.php");
}

function UpdateVideo($video_id, $video_name, $area_id, $introduction) {
    $db = DB1();
    $sql = "UPDATE video SET video_name = '$video_name' WHERE (video_id = '$video_id');
    UPDATE video SET area_id = '$area_id' WHERE (video_id = '$video_id');
    UPDATE video SET introduction = '$introduction' WHERE (video_id = '$video_id');";
    $db->exec($sql);
    header("Location:video_select.php");
}

function DeleteVideo($video_id) {
    $db = DB1();
    $sql = "SET FOREIGN_KEY_CHECKS = 0; 
    DELETE FROM video_comment WHERE video_id = $video_id;
    DELETE FROM score WHERE video_id = $video_id;
    DELETE FROM vtype_record WHERE video_id = $video_id;
    DELETE FROM director_record WHERE video_id = $video_id;
    DELETE FROM actor_record WHERE video_id = $video_id;
    DELETE FROM video WHERE video_id = $video_id;
    SET FOREIGN_KEY_CHECKS = 1;";
    $db->exec($sql);
    header("Location:video_select.php");
}

function AddMember($member_name, $birthday, $gender, $account, $password) {
    $db = DB1();
    $sql = "INSERT INTO member(member_name, birthday, gender, account, password) VALUES ('$member_name', $birthday, '$gender', '$account', '$password')";
    $db->exec($sql)or die ("無法新增".mysqli_error($db)); //執行sql語法
    header("Location:member_login_php.php");
}

function FindUser ($acc , $password){
    $db = DB1();
    $sql = "SELECT * FROM testdb1.manager WHERE account='".$acc."' and password='".$password."'";
    $result = $db->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if($row>1){
        $_SESSION["accU"] = $acc;
        $_SESSION["password"] = $password;
        
        
        header('Location: backstage_login_php.php');
    }else{
        echo '<script>  swal({
            text: "查不到資料！  請檢查輸入資料是否正確！",
            icon: "error",
            button: false,
            timer: 3000,
        }); </script>';
    }

}

function FindMember ($acc , $password){
    $db = DB1();
    $sql = "SELECT * FROM testdb1.member WHERE account='".$acc."' and password='".$password."'";
    $result = $db->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    if($row>1){
        $_SESSION["acc"] = $acc;
        $_SESSION["password"] = $password;
        
        
        header('Location: home.html');
    }else{
        echo '<script>  swal({
            text: "查不到資料！  請檢查輸入資料是否正確！",
            icon: "error",
            button: false,
            timer: 3000,
        }); </script>';
    }

}


function logInSure(){
   if($_SESSION["acc"] == ""){
       // echo '<script>  swal({
       //     text: "未登入或登入逾時！  兩秒後跳轉至登入畫面!",
       //     icon: "error",
       //     button: false,
       //     timer: 2000,
       // }); </script>';
       
       header('Location: backstage.php');
       $_SESSION["unLog"] = true;
       // echo '<meta http-equiv="refresh" content="2;url=../maneger.php" />';
   }
   if($_SESSION["accU"] == ""){
    // echo '<script>  swal({
    //     text: "未登入或登入逾時！  兩秒後跳轉至登入畫面!",
    //     icon: "error",
    //     button: false,
    //     timer: 2000,
    // }); </script>';
    
    header('Location: backstage.php');
    $_SESSION["unLog"] = true;
    // echo '<meta http-equiv="refresh" content="2;url=../maneger.php" />';
}
}
