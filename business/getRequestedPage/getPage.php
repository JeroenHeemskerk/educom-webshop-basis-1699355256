<?php
include('getUrlVar.php');

function getPage(){
  $page = getUrlVar('page', 'home');
  if($page == 'logout'){
    unset($_SESSION['user']);
    $page = 'home';
  }
  return $page;
}
?>