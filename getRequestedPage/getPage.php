<?php
function getPage(){
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = '404';
  }
  return('$page');
}
?>