<?php
function getRequestedPage(){
  include('getRequestedPage/postPage.php');
  include('getRequestedPage/getPage.php');
  
    if ($_SERVER["REQUEST_METHOD"] == "POST")
	  {
      return(postPage());
	  } else {
      $page = getPage();
      $inputs = initInputs($page);
      $errs = initErrs($page);
      return array($page, $inputs, $errs);
    }    
  }
?>