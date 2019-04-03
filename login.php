<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style/stylelogin.css">
</head>
<body data-vide-bg="ocean">
   <?php
    
    session_start();
    define('__CONFIG__', true);
    define('__VALIDATION__', true);
    
    ?>
<form action="validation.php" method="POST">
    <div class="login-form">
        <h2>Sign In</h2>
        <div class="form-input">
            <input type="text" name="email" placeholder="Email">
        </div>
        
        <div class="form-input">
            <input type="Password" name="pw" placeholder="Password...">
        </div>
        
        <div class="form-input">
            <input type="submit" class="admin" name="submit" value="Login">
        </div>
        <a href="admin.php">Admin</a>
    </div>
    </form>
    
    
    
    
    
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="jquery.vide.js"></script>
    
</body>
</html>