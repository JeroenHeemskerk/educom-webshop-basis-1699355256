<?php
function processRegister($inputs, $errs){
  if (empty($inputs['email'])){
      $errs['email'] = 'vul a.u.b. uw e-mailadres in.';
    } else if (emailExists($inputs['email'])){
      $errs['email'] = 'Dit e-mailadres is al in gebruik.';
    }
    if (empty($inputs['name'])){
      $errs['name'] = 'Vul a.u.b. uw naam in.';
    }
    if (empty($inputs['password'])){
      $errs['pass1'] = 'Vul a.u.b. een wachtwoord in.';
    }
    if ($inputs['pass2'] != $inputs['password']){
      $errs['pass2'] = 'Moet overeenkomen met wachtwoord.';
    }
  return $errs;
}

?>