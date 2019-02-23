
           
<?php
    /*Allow the Config*/
    define('__CONFIG__', true);
    /*Require the Config*/
    require_once "inc/config.php";
    
?>


<head>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
          <title>GymRegister</title>
</head>

                    
<body>      
           <div class="uk-section uk-container uk-text-left">
            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
                
                <!--Form-->       
                        <form class="uk-form-stacked js.login" method="get">
                            <h2>Register</h2><a href="login.php">Login</a>
                            
                            <!--Email Holder-->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Email</label>
                                <div class="uk-form-controls input_form">
                                    <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@email.com">
                                </div>
                            </div>
                            <!--Password Holder-->
                            <div class="uk-margin">
                                <label class="uk-form-label" for="form-stacked-text">Passord</label>
                                <div class="uk-form-controls input_form">
                                    <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Your Password">
                                </div>
                            </div>
                            <!--Submit Button-->
                            <div class="uk-margin">
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="form-stacked-text" type="submit" value="Register">
                                </div>
                            </div>

                        </form>
                
            </div>
        </div>
    
<?php
    include_once "inc/footer.php";
    ?>
    

    
</body>






















