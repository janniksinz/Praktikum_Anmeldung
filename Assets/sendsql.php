<?php

session_start();

/*Connect to the DB*/
$pdo = new PDO('mysql:host=localhost;dbname=praktika', 'root', '');

$id = $_POST['id'];

$delete = "$id";

/*Run DELETE Query*/

$pdo->query($delete);
header('location:../admin.php');
exit();
?>