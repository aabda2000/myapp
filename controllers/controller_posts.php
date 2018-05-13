<?php

class PostsController
{

  function __construct()
  {
    // code...
  }
  public function index(){
   $posts= Post::all();
   require_once("views/posts/index.php");
  }
  public function show(){
   if (!isset($_GET['id']))
      return call('pages','error');
   $id=$_GET['id'];
   $post= Post::find($id);
   require_once("views/posts/show.php");
  }
}

 ?>
