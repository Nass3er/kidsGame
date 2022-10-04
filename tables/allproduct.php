<?php
/**  @var   $pdo \PDO */
require_once("../DB/database.php");
$statement=$pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
      

$statement->execute();
$products=$statement->fetchAll(PDO::FETCH_ASSOC);

?>