<?php
// login.php
session_start();

  if (isset($_SESSION["access_granted"]) && $_SESSION["access_granted"]) {
    header("Location:granted.php");
  }

  $email = "";
  if (isset($_SESSION["email_preset"])) {
    $email = $_SESSION["email_preset"];
  }
?>

<?php $_SESSION["currentpage"]="login"; include("header.php"); ?>
    <h3>Login</h3>
    <?php
    if (isset($_SESSION["status"])) {
      echo "<div id='status'>" .  $_SESSION["status"] . "</div>";
      unset($_SESSION["status"]);
    }
    ?>
    <tr>
    <form action="login_handler.php" method="POST">

      <tr> 
      <td>Email</td><td> <input type="text" name="email"></td> 
      </tr> 
      <tr> 
      <td>Password</td><td> <input type="password" name="pass"></td> 
      </tr> 
      <td><input id="button" type="submit" name="submit" value="Login"></td>
    </tr> 


    </form>
<?php include("footer.php"); ?>
