<?php

if (ISSET($_POST['login-submit']))
{
    
    $name = "Name: ".$_POST[email]."<p>";
    $pw =   "PW: ".$_POST[pw]."<p>";
    
    echo $name;
    echo $pw;
    
}



?>