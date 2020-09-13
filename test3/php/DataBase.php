<?php
function DB(){
$hostname = "140.131.115.87";
$username = "root";
$password = "109504109504";
$db_name = "testdb";
try {
    $db = new PDO("mysql:host=" . $hostname . ";port=3306;dbname=" . $db_name, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //PDO::MYSQL_ATTR_INIT_COMMAND 設定編碼
    //echo '連線成功';
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //錯誤訊息提醒
    return $db;
//    $db = null; //結束與資料庫連線
} catch (PDOException $e) {
    //error message
    echo $e->getMessage();
}
}
?>
<?php
function DB1(){
    $hostname = "140.131.115.87";
    $username = "root";
    $password = "109504109504";
    $db_name = "testdb1";
    try {
        $db = new PDO("mysql:host=" . $hostname . ";port=3306;dbname=" . $db_name, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        //PDO::MYSQL_ATTR_INIT_COMMAND 設定編碼
        //echo '連線成功';
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //錯誤訊息提醒
        return $db;
    //    $db = null; //結束與資料庫連線
    } catch (PDOException $e) {
        //error message
        echo $e->getMessage();
    }
    }
?>