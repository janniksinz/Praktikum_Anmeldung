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

/*-----------Check for Admin----------*/
$adminp = " SELECT password FROM users WHERE user_id = 1";
$adminn = " SELECT email FROM users WHERE user_id = '1'";

$_SESSION['adminn'] = $adminn;
$_SESSION['adminp'] = $adminp;
/*Querry those*/
    $adminpw = mysqli_query($con, $adminp); 
    $adminname = mysqli_query($con , $adminn);

if ($adminpw == $u_pw && $adminname == $u_email)
{
    header('location:../admin.php');
    $_SESSION['username'] = $_POST['email'];
    exit();
}



/*Try to get the same user from the DB*/   
$s = " SELECT * FROM users WHERE email = '$u_email' && password= '$u_pw'";

/*give userdata to DB*/  
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
/*If email is already taken... output... / Else insert into users*/
if ($num == 1)
{
    $_SESSION['username'] = $_POST['email'];
    header('location:../submit.php');
} else {
    header('location:../login.php');
}
    
?>