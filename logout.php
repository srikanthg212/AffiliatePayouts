
<?php
    session_start();
      session_destroy();
    //  echo "NOt login"; 
      unset($_SESSION["userid"]);
      unset($_SESSION["username"]); 
      unset($_SESSION["userid"]); 
      header("Location: ./login.php");

  ?>


