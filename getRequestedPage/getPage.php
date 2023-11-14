<?php
include('getUrlVar.php');

function getPage(){
  $page = getUrlVar('page', 'home');
  return $page;
}
?>