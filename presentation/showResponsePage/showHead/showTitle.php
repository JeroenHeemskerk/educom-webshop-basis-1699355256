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
    case 'register':
      echo '<title>Aanmelden</title>';
      break;
    case 'login':
      echo '<title>Inloggen</title>';
      break;
    case 'thanks':
      echo '<title>Bedankt!</title>';
      break;
    default:
      echo '<title>404</title>';
  }
}
?>