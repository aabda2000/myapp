<?php

function call($cont,$act){
  require_once('controllers/controller_'.$cont.'.php');
  switch ($cont) {
    case 'pages':

      $controller=new PagesController();
      break;
      case 'posts':
        require_once("models/post.php");
        $controller=new PostsController();
        break;
    default:
      // code...
      break;
  }

  $controller->{$act}();
}

$controllers=array('pages'=>['home','error'],
                   'posts'=>['index','show']);

if(array_key_exists($controller,$controllers)) {
   if (in_array($action,$controllers[$controller])){
     call($controller,$action);
   } else {
     call('pages','error');
   }

} else {
  call('pages','home');
}

?>
