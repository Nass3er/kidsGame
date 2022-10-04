<?php

/**  @var   $pdo \PDO */
require_once("../DB/database.php");

class Verify{

    public function verifyUser($pdo,$uemail,$pas){
     
        $query1="SELECT * FROM users WHERE user_email= ?";

        $stmtVerify=$pdo->prepare($query1);
        $stmtVerify->bindParam(1,$uemail);
        $stmtVerify->execute();
       $res1= $stmtVerify->fetch();
           if (password_verify($pas,$res1['user_password'])) {
             return true;  // DECODE THE HASH PASSWORD THAT GET FROM DB
           }else {
             return false;
           }
        }
     
        }  
    ?>