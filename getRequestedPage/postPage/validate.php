<?php
function validate($valid, $errs, $page){
  if(!array_filter($errs)){
	  $valid = true;
      switch ($page){
      case 'contact':
        break;
      case 'register':
        $page = 'login';
        break;
      case 'login':
        $page = 'home';
        break;
      }
  }
  return(array($page, $valid));
}
?>