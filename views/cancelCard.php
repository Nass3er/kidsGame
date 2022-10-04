<?php
session_start();
/**  @var $pdo \PDO */
require_once("../DB/database.php");
 $qup=0;
$id=$_POST['id'];
$quant=$_POST['count'];
if($id !=null){ // this for retry 
    foreach ($_SESSION['cart'] as $key =>$val) {  
        if ($val['id']==$id) {
            // $quant=$val1['quantity']; // to do retryet it to the product
            unset($_SESSION['cart'][$key]);
             
        }
    }

$st2=$pdo->prepare('UPDATE productsr SET quantity = quantity +:qupdate  WHERE id=:id');
$st2->bindValue(':qupdate',$quant);
$st2->bindValue(':id',$id);
$st2->execute();
header('Location:card.php');
exit;
}
?>
  