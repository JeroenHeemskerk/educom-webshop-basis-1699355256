<?php
function validate($valid, $errs, $page, $inputs){
  if(!array_filter($errs)){
	  $valid = true;
      switch ($page){
      case 'contact':
        $page = 'thanks';
        break;
      case 'register':
        dataWrite($inputs);
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