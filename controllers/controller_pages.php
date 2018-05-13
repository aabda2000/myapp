<?php
/**
 *
 */
class PagesController
{

  function __construct()
  {
    // code...
  }
  public function home(){
    $name= "john";
    require_once("views/pages/home.php");
  }

  public function error(){

  }

}
?>
