<?php
    
session_start();

$oldpw  = $_POST['oldpw'];
$newpw1 = $_POST['newpw1'];
$newpw2 = $_POST['newpw2'];
$email  = $_SESSION['username'];

/*Connect to the DB*/
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'praktika');

$check=" SELECT 'password' FROM users WHERE 'email' = '$email'"

if ($check=$oldpw) /*Checking for oldPW*/
{
if ($newpw1 == $newpw2)
{
$update = " UPDATE 'users' SET 'password' = '$newpw1' WHERE 'email' = '$email' ";
header('location:submit.php');
alert ("Password changed");
} else {   
header('location:submit.php');
alert ("Your new passwords are different");
}
    
} else { /*oldpw does not fit to the actual pw*/
   alert ("Your password is incorrect. Please contact the Administrator for a new Password");
}    

?>