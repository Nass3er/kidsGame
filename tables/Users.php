<?php

/**  @var   $pdo \PDO */
require_once("../DB/database.php");

class Users  {
public $user_id;
public $user_name;
public $user_email;
protected $user_password;

public function create_user($pdo,$name,$email,$pass){
    $st= $pdo->prepare("INSERT INTO users(user_name,user_email,user_password)
    VALUES(:uname, :uemail, :upass)");
   
   $passHashed=password_hash($pass,PASSWORD_DEFAULT);
   $st->bindValue(':uname', $name);
   $st->bindValue(':uemail',$email);
   $st->bindValue(':upass',$passHashed);
   $st->execute();
  
  return "insert successfully..";

}

}