<?php
    //Allow Config
    define('__CONFIG__', true);
    //require Config
    require_once "inc/config.php";
?>

<html>
<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
    <link rel="stylesheet" href="Assets/style/style.css">
    <link rel="stylesheet" href="Assets/style/style_login.css">
    

    <title>GymLogin</title>
    
</head>

                    
<body>
   
   <!--  Navbar on Top  -->
   <?php
        include_once "inc/Header.php";
    ?>
   
   <!-- Parallax Content -->
   
    <div class="pimg1">
        <div class="ptext">
            
                <form action="" method="post" class="border">
                    <input type="email" name="email" id="email" placeholder="Your Email:">
                    <input type="password" name="password" id="" placeholder="Your password:">
                    <button type="submit">Login</button>
                </form>
            
        </div>
    </div>
    
    
<section class="section section1 section-bg1" id="info">
    <h2>Infos</h2>
   <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque debitis id earum pariatur. Sunt placeat quibusdam iure rerum nisi quas, deserunt doloribus expedita. Temporibus nam molestiae sint voluptate eius dolorum eum aspernatur fuga delectus numquam sit amet, maiores consequatur aut molestias laudantium voluptatum esse, asperiores qui ratione reprehenderit ducimus? Illum deserunt minima quisquam aliquid obcaecati quia atque placeat. Harum voluptatum, fuga ratione dolor expedita repellendus accusamus vero eos odio. Molestiae saepe sed quia quasi corrupti, quo optio architecto culpa.</p> -->
    
    <div class="form">  

                <form action="assets/login.inc.php " method="POST">
                    <input type="email" name="email" id="email" placeholder="Your Email:">
                    <input type="password" name="pw" id="pw" placeholder="Your Password:">
                    <button type="submit" name="login-submit">Login</button>
                </form>
    
    </div>        
    
    <a href="signup.php" class="form-submit">Signup</a>
</section>
    
    
    
    


   
   
   
<?php
    include_once "inc/footer.php";
    ?>
</body>
</html>





















