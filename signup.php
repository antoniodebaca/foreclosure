<?php $_SESSION["currentpage"]="signup"; include("header.php"); ?>
<body id="body-color"> 
<div id="Sign-Up"> 
<fieldset style="width:30%">
<legend>Registration Form</legend> 
<table border="0"> 
<tr> 

<?php
session_start();
if( isset($_SESSION['SYSTEM_MSG']) && is_array($_SESSION['SYSTEM_MSG']) && count($_SESSION['SYSTEM_MSG']) >0 ) {
	echo '<ul style="padding:0; color:red;">';
	foreach($_SESSION['SYSTEM_MSG'] as $msg) {
		echo '<li>',$msg,'</li>'; 
	}
	echo '</ul>';
	unset($_SESSION['SYSTEM_MSG']);
}
?>

<form method="POST" action="newuser_handler.php"> 
<td>Email</td><td> <input type="text" name="email"></td> 
</tr> 
<tr> 
<td>First Name</td><td> <input type="text" name="fname"></td> 
</tr> 
<tr> 
<td>Last Name</td><td> <input type="text" name="lname"></td> 
</tr> 
<tr> 
<td>Phone Number</td><td> <input type="text" name="phone"></td> 
</tr> 
<tr> 
<td>Password</td><td> <input type="password" name="pass"></td> 
</tr> 
<tr> 
<td>Confirm Password </td><td><input type="password" name="cpass"></td> 
</tr> 
<tr> 
<td><input id="button" type="submit" name="submit" value="Sign-Up"></td> 
</tr> 
</form> 
</table> 
</fieldset> 
</div> 
<?php include("footer.php"); ?>

