<?php

define ('__CONFIG__',true);
require_once "../inc/config.php";    
/*Start Session*/
session_start();


/*Connect to the DB*/
$pdo = new PDO('mysql:host=localhost;dbname=praktika', 'root', '');

/*get useremail and password from user*/
$u_email = $_POST['email'];
$u_pw    = $_POST['pw'];

/*----------------Check for Admin-------------*/
$s= "SELECT 'email' FROM users WHERE user_id=1";
$_SESSION['admin'] = "Hallo";



/*-----------Check for Admin----------*//*
$adminp = " SELECT password FROM users WHERE user_id = 1";
$adminn = " SELECT email FROM users WHERE user_id = 1";

$arrayadmin = array('')

/*Querry those*//*
    $adminpw = $pdo->query($adminp); 
    $adminname = $pdo->query($adminn);

$_SESSION['test'] = $adminp;
$_SESSION['adminemail'] = $adminname;
$_SESSION['adminpw'] = $adminpw;

if ($adminpw == $u_pw && $adminname == $u_email)
{
    header('location:../admin.php');
    $_SESSION['username'] = $_POST['email'];
    exit();
}

*/
//Try to find the Admin With IN UNNEST
/*$adminquery = " SELECT email IN UNNEST [$_POST['email']]";*/




/*Try to get the same user from the DB*/   
$s = " SELECT * FROM users WHERE email = '$u_email' && password= '$u_pw'";

/*give userdata to DB*/  
$result = $pdo->query($s);
$num = $result->rowCount();

/*If email is already taken... output... / Else insert into users*/
if ($num == 1)
{
    $_SESSION['username'] = $_POST['email'];
    header('location:../submit.php');
} else {
    header('location:../login.php');
}
    
?>