<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/style/style2.css">
</head>
<body>
   
   
   <!-- ----------------INCLUDE HEADER------------------- -->
<?php include_once "inc/header.php";
    session_start();
        ?>
   <!-- ----------------INCLUDE HEADER------------------- -->
    <div class="container">
       <div class="login-box">
        <div class="">
            <div class="login-left">
                <h2>Submit the Form Here:</h2>
                <form action="Assets/insert.php" method="POST">
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="
                        <?php echo $_SESSION['username']; ?> 
                        " disabled>
                    </div>
                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="u_name" id="" class="form-control"  required>
                    </div>
                    
                    <div class="form-group">
                        <label>Vorname</label>
                        <input type="text" name="u_vname" id="" class="form-control" required>
                    </div>
                    
                    <div class="dropdown">
                        <label>Klasse:</label><br>
                        <select size="4" name="klasse">
                            <option value="1">9/1</option>
                            <option value="2">9/2</option>
                            <option value="3">9/3</option>
                            <option value="4">9/4</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Unternehmen</label>
                        <input type="text" name="f_name" id="" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Ansprechpartner</label>
                        <input type="text" name="f_ansprechpartner" id="" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Ort des Unternehmens</label>
                        <input type="text" name="f_ort" id="" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>PLZ:</label>
                        <input type="text" name="f_plz" id="pw" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Anschrift</label>
                        <input type="text" name="f_anschrift" id="" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Telefonnummer</label>
                        <input type="tel" name="f_tel" id="" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Bemerkungen</label>
                        <input type="text" name="bemerkungen" id="" class="form-control" required>
                    </div>
                    
                    
                    
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </form>
            </div>
            

            </div>
        </div>
    </div>
    <div>
        <a href="admin.php" style="opacity:0.4;">Admin</a>
    </div>
</body>
</html>