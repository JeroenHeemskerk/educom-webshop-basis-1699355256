<?php
function showHeader(){
  switch ($page){
    case 'home':
      echo '<h1 class="title">Home</h1>';
    case 'about': 
      echo '<h1 class="title">About</h1>';
    case 'contact':
      echo '<h1 class="title">Contact</h1>';
    case '404':
      echo '<h1 class="title">Error 404:</h1>';
  }
}
?>