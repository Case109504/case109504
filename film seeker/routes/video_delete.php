<?php
$hostname = "140.131.115.87:3306";
$username = "root";
$password = "109504109504";
$databasename = "testdb";

// 創建連接
$cn = new mysqli($hostname,$username,$password,$databasename);

if (!$cn)//判斷連線是否為空
{
die("連線錯誤: " . mysqli_connect_error());//連線失敗 列印錯誤日誌
}
$cn->query("SET NAMES utf8");//設定 字符集為utf8格式
$cn->select_db("Video");//選擇要操作的資料表

$sql="select * from testdb.Video";   
mysqli_query($cn,$sql);    //傳入資料庫連線引數，sql字串。
$res=$cn->query($sql);    //接收查詢產生的結果集

//排空錯誤
if(empty($_GET['video_id'])){
    die('video_id is empty');
}

$id=intval($_GET['video_id']);

//刪除指定資料
mysqli_query("DELETE FROM Video WHERE video_id=$video_id");
//排錯並返回頁面
if(mysqli_error()){
    echo mysqli_error();
}else{
    header("Location:video_select.php");
}
?>