<?php

include('testInput.php');

function makeErr($inputs, $errs, $page){
  foreach ($inputs as $key => $value){
      if (isset($_POST[$key])){
          $inputs[$key] = testInput($_POST[$key]);
        }
  }
  switch ($page){
    case 'contact':
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
      break;
    case 'register':
    $dir = "C:/xampp/htdocs/educom-webshop-basis-1699355256/getRequestedPage/postPage/";
    $userFile = fopen($dir. 'users/users.txt', 'r+');
    $users = explode(PHP_EOL, fread($userFile, filesize($dir.'users/users.txt')));
    $userData = array();
    foreach($users as $value)
      array_push($userData, explode('|', $value));
    $emailExists = false;
    foreach ($userData as $value){
      if ($value[0] == $inputs['email']){
        $emailExists = true;
      }
    }
      if (empty($inputs['email'])){
        $errs['email'] = 'vul a.u.b. uw e-mailadres in.';
      } else if ($emailExists){
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
        break;
      }
    case 'login':
  }
    
  return array($inputs, $errs);
}
?>