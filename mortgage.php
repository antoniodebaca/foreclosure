<?php include("header.php"); ?>   
<?php
 
 // Gets an id from the query string to look up the product in MySQL
  require_once "Dao.php";
  $dao = new Dao();
  
  $parcel = $_GET["Parcel"];
  $estate = $dao->getMortgage($parcel);    
    echo "<table>";
     echo "<tr> ";
      echo "<td> ". "Parcel" . ": " .  $estate["Parcel"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Year Built" . ": " .  $estate["noofdwellin"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Number of Buildings" . ": " .  $estate["occdate"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Year Remodeled" . ": " .  $estate["yearbuilt"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Bedrooms" . ": " .  $estate["yearrem"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Bathrooms" . ": " .  $estate["effage"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Fireplace" . ": " .  $estate["bathrooms"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "heating" . ": " .  $estate["constclass"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "AC" . ": " .  $estate["fireplace"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Car Storage" . ": " .  $estate["heating"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Secondary Car Storage" . ": " .  $estate["ac"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Porch Sq ft" . ": " .  $estate["carstor2"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Deck Cover" . ": " .  $estate["porchsqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Patio Sq ft" . ": " .  $estate["decksqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Pool Sq ft" . ": " .  $estate["Deckcover"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Ground Level Sq ft" . ": " .  $estate["Patiosqft"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Upper Floor Sq ft" . ": " .  $estate["Patiocover"] . "</td>";
      echo "</tr>";
      echo "<tr> ";
      echo "<td> ". "Lower Level Unfinished Sq ft" . ": " .  $estate["Poolsqft"] . "</td>";
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
      echo "<td> ". "Attic finished Sq FT" . ": " .  $estate["Atticsqftu"] . "</td>";
      echo "</tr>";  
      echo "<td><a href='mortgage.php?Parcel=" . $estate["Parcel"] . "'></a></td>";
    echo "</table>";
?>


    
<?php include("footer.php"); ?>

