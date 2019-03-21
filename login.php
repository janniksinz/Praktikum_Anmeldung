<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Site</title>
    <link rel="stylesheet" href="Assets/style/style_admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/style/style2.css">
</head>
<body>
   
   
   <!-- ----------------INCLUDE HEADER------------------- -->
<?php include_once "inc/header.php"; ?>
   <!-- ----------------INCLUDE HEADER------------------- -->
    <div class="container">
       <div class="login-box">
        <div class="">
            <div class="login-left">
                <h2>Login Here:</h2>
                <form action="Assets/validation.php" method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pw" id="pw" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div>
            

            </div>
        </div>
    </div>
    <div>
        <a href="admin.php">Admin</a>
    </div>
</body>
</html>