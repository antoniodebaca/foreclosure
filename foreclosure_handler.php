<?php include("header.php"); ?>
<?php
// newuser_handler.php
require_once "Dao.php";
$dao = new Dao();
//save user to the database
//this checks if the email is set to something and if not is saves it as "";
//$Propaddnum = $_GET["Propaddnum"]; 
//$Primowner = $_GET["Primowner"];

$address = (isset($_GET["address"])) ? $_GET["address"] : "";
$Owner = (isset($_GET["Owner"])) ? $_GET["Owner"] : "";


if($Owner==""){
$estates = $dao->getForeclosure($address);
    echo "<table>";
    foreach ($estates as $estate) {
      echo "<tr>";
      echo "<td>" . $estate["address"] . "</td>";
      echo "<td>" . $estate["city"] . "</td>";
      echo "<td>" . $estate["Owner"] . "</td>";
      echo "<td>" . $estate["Morg_amoun"] . "</td>";
      echo "<td>" . $estate["Auction_plac"] . "</td>";
      echo "<td>" . $estate["Auction_time"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
}
else{
$estates = $dao->getOwnerForeclosure($Owner);
    echo "<table>";
    foreach ($estates as $estate) {
      echo "<tr>";
      echo "<td>" . $estate["address"] . "</td>";
      echo "<td>" . $estate["Owner"] . "</td>";
      echo "<td>" . $estate["Morg_amoun"] . "</td>";
      echo "<td>" . $estate["Auction_plac"] . "</td>";
      echo "<td>" . $estate["Auction_time"] . "</td>";
      echo "</tr>";
    }
    echo "</table>";
}
?>

<?php include("footer.php"); ?>
  
