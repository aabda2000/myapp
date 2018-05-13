<?php
require_once('connect.php');
require_once('post.php');

$list=[];
$list = Post::all();
print json_encode($list);

 ?>
