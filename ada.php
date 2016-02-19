<?php $_SESSION["currentpage"]="ada"; include("header.php"); ?>
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
//$addresses = $dao->getEstate();
?>

  
<div id="Address-Search"> 
<fieldset style="width:30%">
<legend>Property Search</legend> 
<table border="0"> 
<tr> 
<form method="GET" action="property_handler.php"> 
<th>Address Number: </th><td> <input type="text" name="Propaddnum"></td> 
</tr> 
<tr> 
<th>Owner Lastname:</th><td> <input type="text" name="Primowner"></td> 
</tr> 
<tr> 
<td><input id="button" type="submit" name="submit" value="Address-Search"></td> 
</tr> 
</form> 
</table> 
</fieldset> 
</div> 

<!--    <div id="nav3"> -->
      <?php
      $users = $dao->getLogOn();
      echo "<table>";
      echo "<tr> ";
//      echo "<td> ". "Users Logged On" . " </td>";
      echo "<td> " . "        " . " </td>";

      echo "</tr> ";
      
    foreach ($users as $user) {
      echo "<tr> ";
      echo "<td><a href='profile.php?Email=" . htmlspecialchars($user["username"]) .  "'>".htmlspecialchars($user["username"]). "</a> </td>";
      echo "<td> " . "        " . " </td>";
    }
    echo "</table>";
?>
 <!-- </div> -->

<?php include("footer.php"); ?>
  









