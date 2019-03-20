<?php

define ('__CONFIG__',true);
require_once "../inc/config.php";    
session_start();

$con = mysqli_connect('localhost', 'root', '');


$u_email = $_POST['email'];
$u_pw    = $_POST['pw'];
    
/*Try to get the same user from the DB*/   
$s = " SELECT * FROM users WHERE name = '$u_email'";
/*give userdata to DB*/  
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
/*If email is already taken... output... / Else insert into users*/
if ($num == 1)
{
    echo 'Username already taken!';
} else {
    $reg = " INSERT INTO users(email, password) 
            VALUES ('$u_email', '$u_pw')";
    mysqli_query($con, $reg);
    echo 'Registration successful<br>';
}
echo 'HI';
    
?>