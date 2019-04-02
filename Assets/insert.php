<?php

session_start();

/*Connect to the DB*/
$pdo = new PDO('mysql:host=localhost;dbname=praktika', 'root', '');


/*DELETE*/
$user_id=1;
/**/

$email = $_SESSION['username'];
$u_name = $_POST['u_name'];
$u_vname = $_POST['u_vname'];
$klasse = $_POST['klasse'];
$f_name = $_POST['f_name'];
$f_ansprechpartner = $_POST['f_ansprechpartner'];
$f_ort = $_POST['f_ort'];
$f_plz = $_POST['f_plz'];
$f_anschrift = $_POST['f_anschrift'];
$f_telefonnummer = $_POST['f_tel'];
$bemerkungen = $_POST['bemerkungen'];


/*--------------*/
/*----------*/
/*--------------*/
 $insert = " INSERT INTO users(user_id, u_email, u_name, u_vname, klasse, f_name, f_ansprechpartner, f_ort, f_plz, f_anschrift, f_telefonnummer, bemerkungen) 
 VALUES ('$user_id', '$email', '$u_name', '$u_vname', '$klasse', '$f_name', '$f_ansprechpartner', '$f_ort', '$f_plz', '$f_anschrift', '$f_telefonnummer', '$bemerkungen')";

/*Run INSERT Query*/
$pdo->query($insert);
header('location:../submit.php');
exit();
?>