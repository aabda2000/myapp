<?php
require_once('post.php');

$liste= Post::all();
//var_dump($liste);
var_dump(Post::find(2)->content);
?>
