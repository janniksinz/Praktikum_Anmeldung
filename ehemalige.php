<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ehemalige Praktika</title>
</head>
<body>
    
    <?php
    
    session_start();
    
    /*Connect to the DB*/
    $con = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($con, 'praktika');
    $pdo = new PDO('mysql:host=localhost;dbname=praktika', 'root', '');
    
        

    
    ?>
    
    
</body>
</html>