<?php

define ('__CONFIG__',true);
require_once "../inc/config.php";    
/*Start Session*/
session_start();


/*Connect to the DB*/
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'praktika');

/*get useremail and password from user*/
$u_email = $_POST['email'];
$u_pw    = $_POST['pw'];
    
/*Try to get the same user from the DB*/   
$s = " SELECT * FROM users WHERE email = '$u_email' && password= '$u_pw'";

/*give userdata to DB*/  
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
/*If email is already taken... output... / Else insert into users*/
if ($num == 1)
{
    $_SESSION['username'] = $u_email;
    header('location:../submit.php');
} else {
    header('location:../login.php');
}
    
?>