<?php
include('showMenuItem.php');

function showMenu(){
  echo '<ul class="menu">';
  if (isset($_SESSION['user'])){
    showMenuItem('home', 'HOME');
    showMenuItem('about', 'ABOUT');
    showMenuItem('contact', 'CONTACT');
    showMenuItem('logout', 'LOGOUT '.$_SESSION['user']);
  } else {
    showMenuItem('home', 'HOME');
    showMenuItem('about', 'ABOUT');
    showMenuItem('contact', 'CONTACT');
    showMenuItem('register', 'REGISTER');
    showMenuItem('login', 'LOGIN');
  }
  echo '</ul>';
}     
?>