<?php $_SESSION["currentpage"]="myprofile"; include("header.php"); ?>
<?php
session_start();
if (isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"] ||
   !isset($_SESSION["access_granted"])) {
  $_SESSION["status"] = "You need to log in first";
  header("Location:login.php");
}
// products.php
// This page lists products and generates links with an id in the query string
require_once "Dao.php";
$dao = new Dao();
$email =$_SESSION["email"]
?>
<html>
  <body>
  <div id="main">
  <div id="nav2">
    <?php
    $historys = $dao->getMyHistory($email);
    echo "<table>";
     echo "<tr> ";
      echo "<th> ". "Previous Property search" . " </th>";
      echo "<th> ". "Date of search " . " </th>";
      echo "<th> ". "View Property That Was Searched " . " </th>";
      echo "</tr> ";
      
    foreach ($historys as $history) {
      echo "<tr> ";
      echo "<td> " . $history["address"] . " </td>";
      echo "<td> " . $history["dateofsearch"] . " </td>";
      echo "<td><a href='property_handler.php?Propaddnum=" . $history["address"] . "'>"." View user search". "</a></td>";
      echo "</tr> ";
    }
    echo "</table>";   
?>
  </div>
  <form action="email.php">
    <input type="submit" value="Go to Emails">
</form>
   <div id="nav3"> 
      <?php
      $users = $dao->getLogOn();
      echo "<table>";
      echo "<tr> ";
      echo "<th> ". "Users Logged On" . " </th>";
      echo "</tr> ";
      
    foreach ($users as $user) {
      echo "<tr> ";
      echo "<td><a href='profile.php?Email=" . htmlspecialchars($user["username"]) .  "'>".htmlspecialchars($user["username"]). "</a> </td>";
      echo "</tr> ";
    }
    echo "</table>";
?>
  </div> 
  </div>
  <?php include("footer.php"); ?>












