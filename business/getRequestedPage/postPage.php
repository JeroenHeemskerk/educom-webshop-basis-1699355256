<?php

include('postPage/initInputs.php');
include('postPage/initErrs.php');
include('postPage/processRequest.php');
include('postPage/validate.php');

function postPage(){
  $pageTemp = getUrlVar('page', 'home');
  $inputs = initInputs($pageTemp);
  $errs = initErrs($pageTemp);
  list($inputs, $errs) = processRequest($errs, $inputs, $pageTemp);
  $valid = false;
  list($page, $valid) = validate($valid, $errs, $pageTemp, $inputs);
  return(array($page, $inputs, $errs));
}
?>