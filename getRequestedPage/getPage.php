<?php
function getPage(){
  if(isset($_GET['page'])) {
    $page = $_GET['page'];
  } else {
    $page = 'home';
  }
  return($page);
}
?>