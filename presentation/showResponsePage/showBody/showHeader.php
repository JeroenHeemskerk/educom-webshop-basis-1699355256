<?php
function showHeader($page){
  switch ($page){
    case 'home':
      echo '<h1 class="title">Home</h1>';
      break;
    case 'about': 
      echo '<h1 class="title">About</h1>';
      break;
    case 'contact':
      echo '<h1 class="title">Contact</h1>';
      break;
    case 'register':
      echo '<h1 class="title">Register</h1>';
      break;
    case 'login': 
      echo '<h1 class="title">Login</h1>';
      break;
    case 'thanks': 
      echo '<h1 class="title">Bedankt!</h1>';
      break;
    default:
      echo '<h1 class="title">Error 404:</h1>';
  }
}
?>