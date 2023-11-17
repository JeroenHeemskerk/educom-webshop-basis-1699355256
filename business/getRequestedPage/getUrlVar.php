<?php

function getUrlVar($varName, $default){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST[$varName])) {
      return $_POST[$varName];
    } 
      return $default;
  } else {
    if(isset($_GET[$varName])) {
      return $_GET[$varName];
    } 
      return $default;
  }
}

?>