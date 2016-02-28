<?php $_SESSION["currentpage"]="foreclosures"; include("header.php"); ?>
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
//$estates = $dao->getForeclosures();
?>
<html>
 <head>
 </head>
  <body>
    <div id="main">
    <?php
    $estates = $dao->getForeclosureDates();
    echo "<table>";
    echo "<tr> ";
     echo "<th> ". "Address       " . " </th>";
     echo "<th> ". "City          " . " </th>";
     echo "<th> ". "Owed on Note  " . " </th>";
     echo "<th> ". "Assessed At   " . " </th>";
     echo "<th> ". "Owner         " . " </th>";
     echo "<th> ". "Auction Place " . " </th>";
     echo "<th> ". "Auction Time  " . " </th>";
     echo "<th> ". "Detailed Information  " . " </th>";
     echo "</tr> ";


    foreach ($estates as $estate) {
      $house = $dao->getPropertyParcelNum($estate["address"]);	
      $assessed = $dao->getEstate2($house["Parcel"]); 
      echo "<tr> ";
      echo "<td> " . $estate["address"] . " </td>";
      echo "<td> " . $estate["city"] . " </td>";
      echo "<td> " . $estate["Morg_amoun"] . " </td>";
      echo "<td> " . $assessed["Totalvalue"] . " </td>";
      echo "<td> " . $estate["Owner"] . " </td>";
      echo "<td> " . $estate["Auction_plac"] . " </td>";
      echo "<td> " . $estate["Auction_time"] . " </td>";
      echo "<td><a href='detail.php?Parcel=" . $house["Parcel"] . "'>"." More Data". "</a></td>";
      echo "</tr> ";
      
    }

  echo "</table>";

?>
<br>
   <div id="nav3"> 
      <?php
      $dao->deletePeopleNotLoggedOn();
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
<br>
<br>

<a href="foreclosures.php">link text</a>
<br>
<br>
<br>
</div>


<?php include("footer.php"); ?>
  




