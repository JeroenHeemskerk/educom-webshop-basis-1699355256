<?php
function initInputs($page){
  switch($page){
    case 'contact':
      $inputs = array('salutation' => '', 'name' => '', 'preference' => '', 'message' => '', 'email' => '', 'phone' => '', 
               'street' => '', 'house' => '', 'addition' => '', 'zipcode' => '', 'residence' => '');
               break;
    case 'register':
      $inputs = array('email' => '', 'name' => '', 'password' => '', 'pass2' => '');
      break;
    case 'login':
      $inputs = array('email' => '', 'password' => '');
      break;
    default:
      $inputs = array();
  }
  return($inputs);
}
?>