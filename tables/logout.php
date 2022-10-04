<?php
   session_start();
   if (isset($_SESSION['userEmail']) and isset($_SESSION['userPassword'])) {
    //    unset($_SESSION['username']);
    //    unset($_SESSION['password']);
       session_unset();
       session_destroy();

       header('Location:../views/index.php');
       exit;
   }
?>
