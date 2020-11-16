<?php
session_start();
$_SESSION["acc"] = "";
$_SESSION["accU"] = "";
echo '<script language="JavaScript">;alert("您已登出");location.href="../home.php";</script>';