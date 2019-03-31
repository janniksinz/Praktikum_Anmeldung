<?php

define ('__CONFIG__',true);
require_once "../inc/config.php";    
/*Start Session*/
session_start();

/*redirect back to the same page*/
header('location:../admin.php');

/*Connect to the DB*/
$pdo = new PDO('mysql:host=localhost;dbname=praktika', 'root', '');

/*get useremail and password from user*/
$u_email = $_POST['email'];
$u_pw    = $_POST['pw'];
$u_pw2   = $_POST['pw2'];
    
/*Try to get the same user from the DB*/   
$s = " SELECT * FROM users WHERE email = '$u_email'";
/*give userdata to DB*/  
$result = $pdo->query($s);

$num = mysqli_num_rows($result);
/*If email is already taken... output... / Else insert into users*/
if ($num == 1)
{
    echo 'Username already taken';
} else {
    if ($u_pw == $u_pw2)
    {
        
    $reg = " INSERT INTO users(email, password) 
            VALUES ('$u_email', '$u_pw')";
    $pdo->query($reg);
    echo 'Registration successful<br>';
    
    }
}
    
?>