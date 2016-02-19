<?php
// logout.php
session_start();
require_once "Dao.php";
$dao = new Dao();
$dao->LogOff($_SESSION["email"]);
session_destroy();
header("Location:login.php");
?>