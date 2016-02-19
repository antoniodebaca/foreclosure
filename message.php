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
$id = $_GET["id"];
$emails = $dao->getMessage($id);
$currentUser = $_SESSION["email"]
?>
<html>
  <body>

    <?php
    if($currentUser== $emails["receiver"]) {
    echo "<table>";
     echo "<tr> ";
      echo "<td> ". "From" . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "<td> ". "Message" . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "<td> ". "Sent" . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "</tr> ";
     

      echo "<tr> ";
      echo "<td> " . htmlspecialchars($emails["sender"]) . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "<td> " .htmlspecialchars($emails["message"]) . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "<td> " . $emails["sent"] . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "<td><a href='messageReply.php?Email=" . $emails["sender"] . "'>"." Reply to Message". "</a></td>";
      echo "<td> " . "        " . " </td>";

      echo "</tr> ";
    
    echo "</table>";
   }else{
    
    // header("Location:myprofile.php");
     }
?>
<?php include("footer.php"); ?>
