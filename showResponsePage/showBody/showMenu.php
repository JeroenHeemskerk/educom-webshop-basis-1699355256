<?php
include('showMenuItem.php');

function showMenu(){
  echo '<ul class="menu">';
  showMenuItem('home', 'HOME');
  showMenuItem('about', 'ABOUT');
  showMenuItem('contact', 'CONTACT');
  echo '</ul>';
}     
?>