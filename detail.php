
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

  $parcel = $_GET["Parcel"];
  $estate = $dao->getDetails($parcel); 
  $estates = $dao->getEstate2($parcel);
  $dao->saveUserSearch($_SESSION["email"],$estates["Address"]);
  $googleLoc =  $estates["Address"] . ", ". $estates["City_state"] . ", ID";
    echo "<table>";
      echo "<tr> ";
      echo "<td> " . "Property Address" . ": " . $estates["Address"] . " </td>";
      echo "<tr> ";
      echo "<td> " . "Property Parcel Number" . ": " . $estates["Parcel"] . " </td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td> " . "Property Owner" . ": " .$estates["Primowner"] . " </td>";
      echo "</tr>";  
      echo "<tr> ";
      echo "<td> " . "Property Second Owner" . ": " . $estates["Secowner"] . " </td>";
      echo "</tr>";  
      echo "<tr> ";
      echo "<td> " . "Assessed Value" . ": " . $estates["Totalvalue"] . " </td>";
      echo "</tr>";  
      echo "<tr> ";
      echo "<td> " . "City of Property" . ": " . $estates["City_state"] . " </td>";
      echo "</tr>";  
      echo "<tr> ";
      echo "<td> " . "Legal Descrition" . ": " . $estates["Subnm"] . " </td>";
      echo "</tr>";  
      echo "<tr> ";
      echo "<td> " . "Acerage" . ": " . $estates["Acres"] . " </td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Year Built" . ": " .  $estate["yearbuilt"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Number of Buildings" . ": " .  $estate["effage"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Year Remodeled" . ": " .  $estate["yearrem"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Bedrooms" . ": " .  $estate["bedrooms"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Bathrooms" . ": " .  $estate["bathrooms"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Fireplace" . ": " .  $estate["fireplace"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "heating" . ": " .  $estate["heating"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "AC" . ": " .  $estate["ac"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Car Storage" . ": " .  $estate["carstorage"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Secondary Car Storage" . ": " .  $estate["carstor2"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Porch Sq ft" . ": " .  $estate["porchsqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Deck Cover" . ": " .  $estate["decksqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Patio Sq ft" . ": " .  $estate["Patiosqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Pool Sq ft" . ": " .  $estate["Poolsqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Ground Level Sq ft" . ": " .  $estate["Grflsqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Upper Floor Sq ft" . ": " .  $estate["Upflsqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Lower Level Unfinished Sq ft" . ": " .  $estate["Lwrflsqftu"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Lower Level finished Sq Ft" . ": " .  $estate["Grflsqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Basement Unfinished Sq Ft" . ": " .  $estate["Upflsqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Basement finished Sq Ft" . ": " .  $estate["Lwrflsqftu"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Attic Unfinished Sq FT" . ": " .  $estate["Bsmtflsqfu"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Attic finished Sq FT" . ": " .  $estate["Atticsqftf"] . "</td>";
      echo "</tr>";  
      echo "<tr>";
      echo "<td><a href='mortgage.php?Parcel=" . $estates["Parcel"] . "'></a></td>";
      echo "</tr>";
    echo "</table>";
 
?>


 <iframe id="maps" width="500" height="500" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=<?php echo $googleLoc;?>&key=AIzaSyBor13XP0y12s8Qj58yHlCiU8bvTZZebrs"></iframe>
    
<?php include("footer.php"); ?>

