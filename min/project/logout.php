<?php
  session_start();
  unset($_SESSION["userid"]);
  unset($_SESSION["username"]);
  unset($_SESSION["userlevel"]);
  unset($_SESSION["userpoint"]);
  unset($_SESSION["price"]);
  for($i=1;$i<20;$i++){
    unset($_SESSION["product'$i'"]);
    unset($_SESSION["product'$i'count"]);
    unset($_SESSION["product'$i'price"]);
  }
  echo("
       <script>
          location.href = 'index.php';
         </script>
       ");
?>
