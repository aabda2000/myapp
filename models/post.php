<?php

class Post
{
  public $id,$author_name,$content;
  function __construct($id,$author_name,$content)
  {
    $this->id=$id;
    $this->author_name=$author_name;
    $this->content=$content;
  }

  public static function all() {
   require_once('connect.php');
   $con=DBConnect::getInstance();
   $list=array();//[]
   $res= $con->query("select * from posts");
   foreach ($res->fetchAll() as $post) {
     $list[]=new Post($post['id'],$post['author_name'],$post['content']);
   }
   return $list;

  }//end function all

  public static function find($id){
   require_once('connect.php');
   $id=intval($id);
   $con=DBConnect::getInstance();
   $query=$con->prepare("select * from posts where id= :id");
   $query->execute(array("id"=>$id));
   $post=$query->fetch();
   return new Post($post['id'],$post['author_name'],$post['content']);
  }

}//end class




?>
