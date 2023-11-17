<?php

include('processRequest/testInput.php');
include('processRequest/processContact.php');
include('processRequest/processRegister.php');
include('processRequest/processLogin.php');

function processRequest($inputs, $errs, $page){
  foreach ($inputs as $key => $value){
    if (isset($_POST[$key])){
      $inputs[$key] = testInput($_POST[$key]);
    }
  }
  switch ($page){
    case 'contact':
      $errs = processContact($inputs, $errs);
      break;
    case 'register':
      $errs = processRegister($inputs, $errs);
      break;
    case 'login':
      $errs = processLogin($inputs, $errs);
  }
  return array($inputs, $errs);
}
?>