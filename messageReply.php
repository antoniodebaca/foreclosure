<?php include("header.php"); ?>
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
$_SESSION["email_receiver"] = $email;
?>
<html>

<head>
<title>Message Box</title>
</head>

<body>

<h1></DIC> Chat Box</h1>

<div id="chatBox"></div>

<form method="POST" action="message_handler.php"> 
<tr>
<td>Message</td><td> <input type="text" name="message"></td> 
</tr> 
<td><input id="button" type="submit" name="submit" value="Send"></td> 
</tr> 
</form> 
    <div id="nav3">
    <table>
      <?php
      $users = $dao->getLogOn();
      echo "<tr> ";
      echo "<td> ". "Users Logged On" . " </td>";
      echo "<td> " . "        " . " </td>";

      echo "</tr> ";
      
    foreach ($users as $user) {
      echo "<tr> ";
      echo "<td><a href='profile.php?Email=" . htmlspecialchars($user["username"]) .  "'>".htmlspecialchars($user["username"]). "</a> </td>";
      echo "<td> " . "        " . " </td>";
    }
?>
  </table>
  </div>
<?php include("footer.php"); ?>
