<?php

function showTitle(){
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
    case '404':
      echo '<title>404</title>';
      break;
  }
}
?>