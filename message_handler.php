<?php

session_start();
if (isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"] ||
   !isset($_SESSION["access_granted"])) {
  $_SESSION["status"] = "You need to log in first";
  header("Location:login.php");
}


require_once "Dao.php";
$dao = new Dao();
$email = $_GET["Email"];
$message = (isset($_POST["message"])) ? $_POST["message"] : "";

$dao->sendEmail($_SESSION["email"], $_SESSION["email_receiver"],  $message);
//$dao->sendEmail($emails["receiver"], $emails["sender"], $message);
  header("Location:myprofile.php");

?>
