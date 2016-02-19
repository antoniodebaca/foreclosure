<?php
// newuser_handler.php
require_once "Dao.php";
$dao = new Dao();
session_start();
$SYSTEM_MSG = array();
$errflag = false;

//save user to the database
//this checks if the email is set to something and if not is saves it as "";
$email = (isset($_POST["email"])) ? $_POST["email"] : "";
$fname = (isset($_POST["fname"])) ? $_POST["fname"] : "";
$lname = (isset($_POST["lname"])) ? $_POST["lname"] : "";
$phone = (isset($_POST["phone"])) ? $_POST["phone"] : "";
$password = (isset($_POST["pass"])) ? $_POST["pass"] : "";
$cpass = (isset($_POST["cpass"])) ? $_POST["cpass"] : "";

if($email == '') {
	$SYSTEM_MSG[] = 'Email cannot be empty.';
	$errflag = true;
}

// Check if password is empty
if($fname == '') {
	$SYSTEM_MSG[] = 'First name cannot be empty.';
	$errflag = true;
}

// Check if email is empty
if($lname == ''){
	$SYSTEM_MSG[] = "Last name cannot be empty.";
	$errflag = true;
}

// Check if email is empty
if($phone == ''){
	$SYSTEM_MSG[] = "Phone number cannot be empty.";
	$errflag = true;
}

// Check if password comparator is empty and if it is match with password
if($cpass == '' || $password != $cpass){
	$SYSTEM_MSG[] = 'The password you have typed does not match.';
	$errflag = true;
}

// Check if it is a valid E-mail address
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	$SYSTEM_MSG[] = "$email is not a valid E-mail address.";
	$errflag = true;
}

// Check if password is too weak
if(strlen($password) <= 6){
	$SYSTEM_MSG[] = "Password must be longer than 6 character.";
	$errflag = true;
}

if($errflag == false){
$dao->saveUser($email, $fname, $lname, $phone, $password);
}
else{
$_SESSION['SYSTEM_MSG'] = $SYSTEM_MSG;
session_write_close();
header("location: signup.php");
$errflag = false;
exit();
}

  header("Location:login.php");
//}
?>
