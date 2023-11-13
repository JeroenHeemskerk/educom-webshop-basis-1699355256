<?php
//First, the functions are all defined. 
  include('getRequestedPage.php');
  include('showResponsePage.php');
  
  $page = getrequestedPage();
  showResponsePage($page);
  ?>
</body>
</html>