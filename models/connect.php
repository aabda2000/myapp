<?php

class DBConnect
{
  private static $instance=NULL;
  private function __construct()
  {
    // code...
  }
  public static function getInstance(){
     if (!isset(self::$instance)){
       self::$instance=new PDO("mysql:host=localhost;dbname=myapp","test","",NULL);
     }//end if
     return self::$instance;
   }//end function

}//end class

?>
