<?php session_start(); ?>
<?php include("header.php"); ?>
<?php
//session_start();
if (isset($_SESSION["access_granted"]) && !$_SESSION["access_granted"] ||
   !isset($_SESSION["access_granted"])) {
  $_SESSION["status"] = "You need to log in first";
  header("Location:login.php");
}
// products.php
// This page lists products and generates links with an id in the query string
require_once "Dao.php";
$dao = new Dao();
$email = $_GET["Email"];
//<?php $email 
?>
<html>
  <body>
  <div id="main">
  <div id="nav2">
  <table>
    <?php
    $historys = $dao->getSpecificUserData($email);
     echo "<tr> ";
      echo "<td> ". "User" . " </td>";
      echo "<td> ". "Last Property Search" . " </td>";
      echo "<td> ". "Date of search " . " </td>";
      echo "<td> ". "See Property Of Search " . " </td>";
      echo "</tr> ";  
    foreach ($historys as $history) {
      echo "<tr> ";
       echo "<td> " . $email . " </td>";
      echo "<td> " . $history["address"] . " </td>";
      echo "<td> " . $history["dateofsearch"] . " </td>";
      echo "<td><a href='property_handler.php?Propaddnum=" . $history["Address"] . "'>"." View user search". "</a></td>";
      echo "</tr> ";
    }  
?>
  </table>
  </div>

  <form action="emailUser.php?Email=<?php echo $email; ?>" method="POST">
    <input type="submit" value="Email Me">
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
  </div>
  <?php include("footer.php"); ?>


