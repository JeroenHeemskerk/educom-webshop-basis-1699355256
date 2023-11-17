<?php

function processContact($inputs, $errs){
  if (empty($inputs["salutation"])) {
    $errs['salutation'] = "Aanhef is verplicht";
  } 
  if (empty($inputs["name"])) {
    $errs['name'] = "Naam is verplicht";
  }
    
  if (empty($inputs["preference"])) {
    $errs['preference'] = "Communicatievoorkeur is verplicht";
  }
    
  if (empty($inputs["message"])) {
    $errs['message'] = "Bericht is verplicht";
  } 
    
  if (empty($inputs["email"])) {
    if ($inputs['preference'] == "email"){
      $errs['email'] = "E-mailadres is verplicht";
    }
  }
    
  if (empty($inputs["phone"])) {
    if ($inputs['preference'] == "phone"){
      $errs['phone'] = "Telefoon is verplicht";
    }
  }
  
  $address = false;
  $adress = ($inputs['preference'] == 'mail' || !empty($inputs['street']) || !empty($inputs['house']) || !empty($inputs['addition']) || 
                                         !empty($inputs['zipcode']) || !empty($inputs['residence']));
  if ($address){
    if (empty($inputs["street"])){
      $errs['street'] = "Vul a.u.b. straat in.";
    }
    if (empty($inputs["house"] )) {
      $errs['house'] = "Vul a.u.b. huisnummer in.";
    }
    if (empty($inputs["zipcode"] )) {
      $errs['zipcode'] = "Vul a.u.b. postcode in.";
    } 
    if (empty($inputs["residence"] )) {
      $errs['residence'] = "Vul a.u.b. woonplaats in.";
    } 
  }
  return $errs;
}

?>