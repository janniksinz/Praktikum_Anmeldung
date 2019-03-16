<?php
    /*If there is no '__CONFIG__' defined, do not loead this file*/
    if (!defined('__CONFIG__'))
    {
        exit ();
    }    

    define('__ALLOW HEADER__', true);
    define('__ALLOW_FOOTER__', true);
        
    /*Config down here*/
        
/*----------------------------------------------------------*/

    /*Include DB.php file*/
    include_once "classes/DB.php";
    $object = NULL;
    $object = new DB;
    $object->connectDB();

    if ($object!==NULL)
    {
     $verbindung=true;
    }

   ?> 
   
  