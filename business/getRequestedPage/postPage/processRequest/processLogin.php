<?php

function processLogin($inputs, $errs){
  if (!emailExists($inputs['email'])){
    $errs['email'] = 'Er is geen account geassociëerd met dit e-mailadres.';
  } else if (!validlogin($inputs['email'], $inputs['password'])){
    $errs['password'] = 'Onjuist wachtwoord.';
  } else {
    $_SESSION['user'] = getName($inputs['email']);
  }
  return($errs);
}

?>