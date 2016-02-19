<?php session_start(); ?>
<?php include("header.php"); ?>
<?php
//session_start();
if (isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"] ||
   !isset($_SESSION["access_granted"])) {
  $_SESSION["status"] = "You need to log in first";
  header("Location:login.php");
}


require_once "Dao.php";
$dao = new Dao();
$email = $_GET["Email"];
$_SESSION["email_receiver"] = $email;
//this is where i'm at now
?>
<html>

<head>
<title>Message Box</title>
</head>

<body>

<h1></DIC> Chat Box</h1>

<div id="chatBox"></div>
<?php
echo $email;
?>
<form method="POST" action="message_handler.php"> 
<tr>
<td>Message</td><td> <input type="text" name="message"></td> 
</tr> 
<td><input id="button" type="submit" name="submit" value="Send"></td> 
</tr> 
</form> 

<?php include("footer.php"); ?>
