<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset=utf-8>
    <meta name="X-UA-Compatible" content="IE=edge">
    <meta charset=utf-8>
    <meta name="robots" content="follow">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title>GymPraktika Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_login.css">
</head>

<body>
    
    <!--  Navbar on Top  -->
   <header>
       <h1 class="logo">
          <a href="index.html" style="text-decoration: none;">
          Praktikumsanmeldung Gymnossen</a>
       </h1>
            
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
       
       <nav class="">
           <ul>
               <li><a href="index.html">Home</a></li>
               <!--<li><a href="index.html">Infos</a></li>-->
               <li><a href="login.php">Anmelden</a></li>
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
                Login
            </span>
        </div>
    </div>
    
    <!--
    <section class="section section1 section-light" id="info">
        <h2>Anmelden</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam atque debitis id earum pariatur. Sunt placeat quibusdam iure rerum nisi quas, deserunt doloribus expedita. Temporibus nam molestiae sint voluptate eius dolorum eum aspernatur fuga delectus numquam sit amet, maiores consequatur aut molestias laudantium voluptatum esse, asperiores qui ratione reprehenderit ducimus? Illum deserunt minima quisquam aliquid obcaecati quia atque placeat. Harum voluptatum, fuga ratione dolor expedita repellendus accusamus vero eos odio. Molestiae saepe sed quia quasi corrupti, quo optio architecto culpa.</p>
       <!-- <a href="login.php">Login</a>-->
    <!--------------------
    </section> 
    ------------------->
    <!--next Parallax Image-->

   <!----------------------------------
   
    <div class="pimg2">
        <div class="ptext">
            <span class="border">
                Hinweise:
            </span>
        </div>
    </div>
        
    <section class="section section-dark">
        <h2>Das solltest du beachten:</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eius harum, ullam ut nisi illo assumenda quibusdam eaque esse adipisci aut maiores. Itaque eveniet ea, laudantium impedit qui explicabo reprehenderit.</p>
    </section>    
    
    <!-- next Parallax Section -->
   
    <!------------------------
      
    <div class="pimg3">
        <div class="ptext">
            <span class="border">
                Das benötigst du:
            </span>
        </div>
    </div>
        
    <section class="section section-3">
        <h2>Nicht vergessen:</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente eius harum, ullam ut nisi illo assumenda quibusdam eaque esse adipisci aut maiores. Itaque eveniet ea, laudantium impedit qui explicabo reprehenderit.</p>
    </section>
    
    <!-- first Picture again -->
    
    <!--------------------------------------------
    
    <div class="pimg1">
        <div class="ptext ptext1">
            <span class="border">
               <a href="contact.html" style="text-decoration: none; cursor:grab">
               Kontakt</a>
            </span>
            <span></span>
        </div>
    </div>

    -------------------->
    
    <section class="section section-dark">
        <h2>Registrieren</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam delectus a necessitatibus, impedit, unde nobis ratione atque consequuntur sit voluptatibus.</p>
        
        <!--Login Form Section-->
        
        <div class="uk-section uk-container uk-text-left">
            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
                
                <!--Form-->       
                        <form class="uk-form-stacked">
                            <!--Email Holder-->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Email</label>
                                <div class="uk-form-controls input_form">
                                    <input class="uk-input" id="form-stacked-text" type="email" placeholder="email@email.com">
                                </div>
                            </div>
                            <!--Password Holder-->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Passord</label>
                                <div class="uk-form-controls input_form">
                                    <input class="uk-input" id="form-stacked-text" type="password" placeholder="Your Password">
                                </div>
                            </div>
                            <!--Submit Button-->
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="submit" value="Register" >
                                </div>
                            </div>

                        </form>
                
            </div>
        </div>
        
        
    
        
        
        
    </section>
    
    
    
    
    
    <!--Script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>

</body>

</html>
