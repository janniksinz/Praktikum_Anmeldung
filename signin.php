
           
<?php
    /*Allow the Config*/
    define('__CONFIG__', true);
    /*Require the Config*/
    require_once "inc/config.php";
    
?>


<head>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
    <link rel="stylesheet" href="Assets/style/style.css">
    <link rel="stylesheet" href="Assets/style/style_login.css">
    

    <title>GymLogin</title>
    
</head>

                    
<body>
   
   <!--  Navbar on Top  -->
   <header>
       <h1 class="logo">
          <a href="index.html">
          Praktikumsanmeldung Gymnossen</a>
       </h1>
            
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
       
       <nav class="">
           <ul>
               <li><a href="index.html">Home</a></li>
               <li><a href="#info">Infos</a></li>
               <li><a href="register.php">Registrieren</a></li>
               <li class="libottom"><a href="#">ehemalige Praktika</a></li>              
           </ul>
       </nav>    
       <label for="nav-toggle"  class="nav-toggle-label">
           <span></span>
          </label>
   </header>
   
   <!-- Parallax Content -->
   
    <div class="pimg1">
        <div class="ptext">
            <span class="border">
                Praktikumsanmeldung
            </span>
        </div>
    </div>
    
    
    <section class="section section1 section-bg1" id="info">
        <h2>Infos</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque debitis id earum pariatur. Sunt placeat quibusdam iure rerum nisi quas, deserunt doloribus expedita. Temporibus nam molestiae sint voluptate eius dolorum eum aspernatur fuga delectus numquam sit amet, maiores consequatur aut molestias laudantium voluptatum esse, asperiores qui ratione reprehenderit ducimus? Illum deserunt minima quisquam aliquid obcaecati quia atque placeat. Harum voluptatum, fuga ratione dolor expedita repellendus accusamus vero eos odio. Molestiae saepe sed quia quasi corrupti, quo optio architecto culpa.</p>
        
   <div class="form">     
        <form action="assets/login.inc.php " method="POST">
            <input type="email" name="email" id="email" placeholder="Your Email:">
            <input type="password" name="pw" id="pw" placeholder="Your Password:">
            <button type="submit" name="login-submit">Login</button>
        </form>

    </div>        
        <a href="register.php" class="form-submit">Signup</a>
    </section>
    
    
    
    


   
   
   
<?php
    include_once "inc/footer.php";
    ?>
</body>






















