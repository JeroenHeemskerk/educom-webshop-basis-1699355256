<?php
function makeErr($inputs, $errs){
  if (empty($_POST["salutation"])) {
    $errs['salutation'] = "Aanhef is verplicht";
  } else {
    $inputs['salutation'] = $_POST["salutation"];
  }
    
  if (empty($_POST["name"])) {
    $errs['name'] = "Naam is verplicht";
  } else {
    $inputs['name'] = $_POST["name"];
  }
    
  if (empty($_POST["communicationpreference"])) {
    $errs['preference'] = "Communicatievoorkeur is verplicht";
  } else {
    $inputs['preference'] = $_POST["communicationpreference"];
  }
    
  if (empty($_POST["message"])) {
    $errs['message'] = "Bericht is verplicht";
  } else {
    $inputs['message'] = $_POST["message"];
  }
    
    
  if (empty($_POST["email"])) {
    if ($inputs['preference'] == "email"){
      $errs['email'] = "E-mailadres is verplicht";
    } else {
      $inputs['email'] = $_POST["email"];
    }
  }
    
  if (empty($_POST["phone"])) {
    if ($inputs['preference'] == "phone"){
      $errs['phone'] = "Telefoon is verplicht";
    } else {
      $inputs['phone'] = $_POST["phone"];
    }
  }
    
  if (empty($_POST["street"])) {
    if ($inputs['preference'] == "mail"){
      $errs['street'] = "Straat is verplicht";
    } 
    if (!empty($_POST["house"] )) {
      $errs['house'] = "Vul a.u.b. straat in";
      $inputs['house'] = $_POST["house"];
    }
    if (!empty($_POST["addition"] )) {
      $errs['addition'] = "Vul a.u.b. straat in";
      $inputs['zipcode'] = $_POST["zipcode"];
    }
    if (!empty($_POST["zipcode"] )) {
      $errs['zipcode'] = "Vul a.u.b. straat in";
      $inputs['zipcode'] = $_POST["zipcode"];
    }
    if (!empty($_POST["residence"] )) {
      $errs['residence'] = "Vul a.u.b. straat in";
      $inputs['residence'] = $_POST["residence"];
    }
  } else {
    $inputs['street'] = $_POST["street"];
    if (empty($_POST["house"] )) {
      $errs['house'] = "Vul a.u.b. huisnummer in";
    } else {
      $inputs['house'] = $_POST["house"];
    }
    if (empty($_POST["zipcode"] )) {
      $errs['zipcode'] = "Vul a.u.b. postcode in";
    } else {
      $inputs['zipcode'] = $_POST["zipcode"];
    }
    if (empty($_POST["residence"] )) {
      $errs['residence'] = "Vul a.u.b. woonplaats in";
    } else {
      $inputs['residence'] = $_POST["residence"];
    }
  }
  return(array($inputs, $errs));
}
?>