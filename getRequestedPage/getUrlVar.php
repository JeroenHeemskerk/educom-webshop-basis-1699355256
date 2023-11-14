<?php

function getUrlVar($varName, $default){
  if(isset($_GET[$varName])) {
    return $_GET[$varName];
  } 
    return $default;
}

?>