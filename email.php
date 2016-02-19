<?php include("header.php"); ?>
<?php
session_start();
if (isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"] ||
   !isset($_SESSION["access_granted"])) {
  $_SESSION["status"] = "You need to log in first";
  header("Location:login.php");
}

// newuser_handler.php
require_once "Dao.php";
$dao = new Dao();
$email2 = $_SESSION["email"];
$emails = $dao->getEmail($email2);
?>
<html>
  <body>

    <?php
    echo "<table>";
     echo "<tr> ";
      echo "<td> ". "From" . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "</tr> ";
      
    foreach ($emails as $email) {
      echo "<tr> ";
      echo "<td> " . htmlspecialchars($email["sender"]) . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "<td><a href='message.php?id=" . $email["ID"] . "'>"." View Message". "</a></td>";
      echo "<td> " . "        " . " </td>";

      echo "</tr> ";
    }
    echo "</table>";
    
?>
<?php include("footer.php"); ?>
