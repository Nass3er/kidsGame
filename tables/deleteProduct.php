
<?php

/**  @var   $pdo \PDO */
require_once("../DB/database.php");

$id=$_GET['id'] ?? null;

if (!$id) {
    header('Location:../views/products.php');
    exit; 
}

$statement= $pdo->prepare('DELETE FROM productsr WHERE id = :id');

$statement->bindValue(':id',$id);
$statement->execute();
header('Location:../views/products.php');
exit;
?>