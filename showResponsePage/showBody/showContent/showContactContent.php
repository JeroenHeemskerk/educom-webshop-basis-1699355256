<?php

include('showContactContent/showForm.php');
include('showContactContent/showThanks.php');
include('showContactContent/initInputs.php');
include('showContactContent/initErrs.php');
include('showContactContent/makeErr.php');
include('showContactContent/validate.php');

function showContactContent(){
  $inputs = initInputs();
  $errs = initErrs();
  $valid = false;
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    list($inputs, $errs) = makeErr($inputs, $errs);
    $valid = validate($valid, $errs);
  }
  if(!$valid){
    showForm($inputs, $errs);
  }
  else{
    showThanks();
  }
}

?>