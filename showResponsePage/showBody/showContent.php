<?php

include ('showContent/showHomeContent.php');
include ('showContent/showAboutContent.php');
include ('showContent/showContactContent.php');
include ('showContent/show404Content.php');

function showContent($page){
  switch($page){
    case 'home':
      showHomeContent;
      break;
    case 'about':
      showAboutContent;
      break;
    case 'contact':
      showContactContent;
      break;
    case '404':
      show404Content;
      break;
  }
}
?>