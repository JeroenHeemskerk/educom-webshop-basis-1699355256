<?php
//First, the functions are all defined. 
  $dir = 'C:/xampp/htdocs/educom-webshop-basis-1699355256/';
  include('getRequestedPage.php');
  include($dir.'presentation/showResponsePage.php');
  include($dir.'data/dataRead.php');
  
  session_start();
  makeDataUsable();
  list($page, $inputs, $errs) = getrequestedPage();
  showResponsePage($page, $inputs, $errs);
  ?>
</body>
</html>