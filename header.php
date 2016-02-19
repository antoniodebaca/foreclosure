
<html>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel ='icon' type"image/jpg" href="images.jpg" sizes=20x20">
  <body>
    <div class="header">
    <ul>
      <li><a id="<?php if($_SESSION["currentpage"]=="about") { echo "current";} else { echo "default";} ?>" href="about.php" class = "about">About</a></li>
      <li><a id="<?php if($_SESSION["currentpage"]=="login") { echo "current";} else { echo "default";} ?>" href="login.php">Login</a></li>
      <li><a id="<?php if($_SESSION["currentpage"]=="signup") { echo "current";} else { echo "default";} ?>" href="signup.php">Sign Up</a></li>
      <li><a id="<?php if($_SESSION["currentpage"]=="ada") { echo "current";} else { echo "default";} ?>" href="ada.php">Ada County</a></li>
      <li><a id="<?php if($_SESSION["currentpage"]=="foreclosures") { echo "current";} else { echo "default";} ?>" href="foreclosures.php">ForeClosures</a></li>
<!--      <li><a id="<?php if($_SESSION["currentpage"]=="userprofiles") { echo "current";} else { echo "default";} ?>" href="userprofiles.php">User's Profiles</a></li> -->
      <li><a id="<?php if($_SESSION["currentpage"]=="myprofile") { echo "current";} else { echo "default";} ?>" href="myprofile.php">My Profile</a></li>
      <li><a id="<?php if($_SESSION["currentpage"]=="logout") { echo "current";} else { echo "default";} ?>" href="logout.php">Logout</a></li>
    </ul>
    </div>
    


