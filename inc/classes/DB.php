
 

<?php
/*
   // If there is no constant defined called __CONFIG__, do not load this file 
if(!defined('__CONFIG__')) {
	exit('You do not have a config file');
}
class DB {
	protected static $con;
	private function __construct() {
		try {
			self::$con = new PDO( 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_course', 'root', 'root' );
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
			self::$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//uncomment on production sites     
			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );
			self::$con->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch (PDOException $e) {
			echo "Could not connect to database."; exit;
		}
	}
	public static function getConnection() {
		if (!self::$con) {
			new DB();
		}
		return self::$con;
	}
    */                                          //Alte Verbindung mit PDO (Funktioniert nicht)
class DB{
    
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;
    
            public static function connectDB() {
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "praktika";
                $charset= "utf8mb4"; /* -ci ??*/
          try{
              
            $dsn = "mysql:host=".$servername.";dbname=".$dbname.";charset=".$charset;    
            $pdo = new PDO($dsn, $username, $password);
              
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
            return $pdo; 
              
          }catch (\Exception $e){
            echo 'Connection failed: '.$e->getMessage();  
          }    
            
                
                                                }//End of Private Function connectDB       
}//End of Class   
   


?>


















