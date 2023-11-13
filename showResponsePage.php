<?php

include('showResponsePage/showDocumentStart.php');
include('showResponsePage/showHead.php');
include('showResponsePage/showBody.php');
include('showResponsePage/showDocumentEnd.php');


function showResponsePage($page){
  showDocumentStart;
  showHead;
  showBody($page);
  showDocumentEnd;
}
?>