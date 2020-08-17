<?php
session_start();
$_SESSION["acc"] = "";
header('Location: ../backstage.php');