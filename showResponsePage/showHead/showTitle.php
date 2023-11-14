<?php

function showTitle($page){
  switch($page){
    case 'home':
      echo '<title>Home</title>';
      break;
    case 'about':
      echo '<title>About</title>';
      break;
    case 'contact':
      echo '<title>Contact</title>';
      break;
    default:
      echo '<title>404</title>';
  }
}
?>