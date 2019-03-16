<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Site</title>
    <link rel="stylesheet" href="Assets/style/style_admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       <div class="login-box">
        <div class="row">
            <div class="col-md-6 login-left">
                <h2>Login Here:</h2>
                <form action="Assets/validation.php">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pw" id="pw" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary"> Login </button>
                </form>
            </div>
            
       
    
    
    
        
            <div class="col-md-6 login-right">
                <h2>Register Here:</h2>
                <form action="Assets/registration.php">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="pw" id="pw" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary"> Registrieren </button>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>