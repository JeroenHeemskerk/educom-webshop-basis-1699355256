<?php
function makeErr(){
  if (empty($_POST["salutation"])) {
    $salutationErr = "Aanhef is verplicht";
  } else {
    $salutation = $_POST["salutation"];
  }
    
  if (empty($_POST["name"])) {
    $nameErr = "Naam is verplicht";
  } else {
    $name = $_POST["name"];
  }
    
  if (empty($_POST["communicationpreference"])) {
    $preferenceErr = "Communicatievoorkeur is verplicht";
  } else {
    $preference = $_POST["communicationpreference"];
  }
    
  if (empty($_POST["message"])) {
    $messageErr = "Bericht is verplicht";
  } else {
    $message = $_POST["message"];
  }
    
    
  if (empty($_POST["email"])) {
    if ($preference == "email"){
      $emailErr = "E-mailadres is verplicht";
    } else {
      $email = $_POST["email"];
    }
  }
    
  if (empty($_POST["phone"])) {
    if ($preference == "phone"){
      $phoneErr = "Telefoon is verplicht";
    } else {
      $phone = $_POST["phone"];
    }
  }
    
  if (empty($_POST["street"])) {
    if ($preference == "mail"){
      $streetErr = "Straat is verplicht";
    } 
    if (!empty($_POST["house"] )) {
      $houseErr = "Vul a.u.b. straat in";
    }
    if (!empty($_POST["addition"] )) {
      $additionErr = "Vul a.u.b. straat in";
    }
    if (!empty($_POST["zipcode"] )) {
      $zipcodeErr = "Vul a.u.b. straat in";
    }
    if (!empty($_POST["residence"] )) {
      $residenceErr = "Vul a.u.b. straat in";
    }
  } else {
    $street = $_POST["street"];
    if (empty($_POST["house"] )) {
      $houseErr = "Vul a.u.b. huisnummer in";
    } else {
      $house = $_POST["house"];
    }
    if (empty($_POST["zipcode"] )) {
      $zipcodeErr = "Vul a.u.b. postcode in";
    } else {
      $zipcode = $_POST["zipcode"];
    }
    if (empty($_POST["residence"] )) {
      $residenceErr = "Vul a.u.b. woonplaats in";
    } else {
      $residence = $_POST["residence"];
    }
  }
}
?>