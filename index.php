<?php
//First, the functions are all defined. 
  include('getRequestedPage.php');
  include('showResponsePage.php');
  
  list($page, $inputs, $errs) = getrequestedPage();
  showResponsePage($page, $inputs, $errs);
  ?>
</body>
</html>