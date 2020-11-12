<?php
session_start();
$_SESSION["acc"] = "";
$_SESSION["accU"] = "";
header('Location: ../home.php');