<?php $_SESSION["currentpage"]="userprofiles"; include("header.php"); ?>
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
$users = $dao->getAllUserData();
?>
<html>
  <body>
  <div id="main">
  <div id="nav2">
    <?php
    echo "<table>";
     echo "<tr> ";
      echo "<td> ". "Users" . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "<td> ". "Parcel " . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "</tr> ";
      
    foreach ($users as $user) {
      echo "<tr> ";
      echo "<td> " . htmlspecialchars($user["Email"]) . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "<td><a href='profile.php?Email=" .$user["Email"] . "'>"." View user profile". "</a></td>";
      echo "<td> " . "        " . " </td>";
      echo "<td> " . $user["Parcel"] . " </td>";
      echo "<td> " . "        " . " </td>";
      echo "<td><a href='detail.php?Parcel=" . $user["Parcel"] . "'>"." View user search". "</a></td>";
      echo "</tr> ";
    }
    echo "</table>";  
?>
  </div>
  <div id="nav3">
        <?php
      $users = $dao->getLogOn();
      echo "<table>";
      echo "<tr> ";
      echo "<td> ". "Users Logged On" . " </td>";
      echo "<td> " . "        " . " </td>";

      echo "</tr> ";
      
    foreach ($users as $user) {
      echo "<tr> ";
      echo "<td><a href='profile.php?Email=" . htmlspecialchars($user["username"]) .  "'>".htmlspecialchars($user["username"]). "</a> </td>";
      echo "<td> " . "        " . " </td>";
    }
    echo "</table>";
?>
  </div>
  </div>
  
<?php include("footer.php"); ?>