<?php

include('showBody/bodyStart.php');
include('showBody/showHeader.php');
include('showBody/showMenu.php');
include('showBody/showContent.php');
include('showBody/showFooter.php');
include('showBody/bodyEnd.php');

function showBody(){
  bodyStart;
  showHeader;
  showMenu;
  showContent($page);
  showFooter;
  bodyEnd;
}

?>