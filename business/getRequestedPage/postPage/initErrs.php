<?php
function initErrs($page){
  switch($page){
    case 'contact':
      $errs = array('salutation' => '', 'name' => '', 'preference' => '', 'message' => '', 'email' => '', 'phone' => '', 
               'street' => '', 'house' => '', 'addition' => '', 'zipcode' => '', 'residence' => '');
      break;
    case 'register':
      $errs = array('email' => '', 'name' => '', 'password' => '', 'pass2' => '');
      break;
    case 'login':
      $errs = array('email' => '', 'password' => '');
      break;
    default:
      $errs = array();
  }
  return $errs;
}
?>