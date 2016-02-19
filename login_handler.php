<?php

session_start();

require_once "Dao.php";
$dao = new Dao();
$email = (isset($_POST["email"])) ? $_POST["email"] : "";
$pass = (isset($_POST["pass"])) ? $_POST["pass"] : "";

$count = $dao->getUser($email, $pass);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count!=null){
  
  $_SESSION["access_granted"] = true;
  $_SESSION["email"] = $email;
  $dao->saveLogOn($email);
  header("Location:myprofile.php");
}

else {
$count = $dao->getUser($email, $pass);
  $status = "Invalid username or password";
  $_SESSION["status"] = $status;
  $_SESSION["email_preset"] = $_POST["email"];
  $_SESSION["access_granted"] = false;

  header("Location:login.php");
}
?>