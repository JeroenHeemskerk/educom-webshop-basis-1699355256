<?php

$dataDir = "C:/xampp/htdocs/educom-webshop-basis-1699355256/data/";

function openFileRead(){
  $dataDir = "C:/xampp/htdocs/educom-webshop-basis-1699355256/data/";
  
  $userFile = fopen($dataDir. 'users/users.txt', 'r');
  return $userFile;
}

function openFileWrite(){
  $dataDir = "C:/xampp/htdocs/educom-webshop-basis-1699355256/data/";
  
  $userFile = fopen($dataDir. 'users/users.txt', 'a');
  return $userFile;
}

function closeFile($userFile){
  fclose($userFile);
}

function makeDataUsable(){
  $dataDir = "C:/xampp/htdocs/educom-webshop-basis-1699355256/data/";
  $userFile = openFileRead();
  $users = explode(PHP_EOL, fread($userFile, filesize($dataDir.'users/users.txt')));
  $userData = array();
  foreach($users as $value)
    array_push($userData, explode('|', $value));
  closeFile($userFile);
  return $userData;
}
      
function emailExists($email){
  $userData = makeDataUsable();
    $exists = false;
    foreach ($userData as $value){
      if ($value[0] == $email){
        $exists = true;
      }
    }
    return $exists;
}

function getName($email){
  $userData = makeDataUsable();
  foreach ($userData as $value){
    if ($value[0] == $email){
      return $value[1];
    }
  }
}

function validLogin($email, $password){
  $userData = makeDataUsable();
    $valid = false;
    foreach ($userData as $value){
      if ($value[0] == $email && $value[2] == $password){
        $valid = true;
      }
    }
    return $valid;
}

function dataWrite($inputs){
  $userFile = openFileWrite();
  $person = $inputs['email'].'|'.$inputs['name'].'|'.$inputs['password'].PHP_EOL;
  fwrite($userFile, $person, FILE_APPEND);
  fclose($userFile);
}
      
?>