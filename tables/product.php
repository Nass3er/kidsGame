

<?php
/**  @var   $pdo \PDO */
require_once("../DB/database.php");
 
class Products  {
public $pro_id;
public $title=null;
public $description;
public $photo;
public $price;
public $quantity;
public $category;

public static function create_product($pdo,Products $p){
    $st= $pdo->prepare("INSERT INTO productsr(title,descriptions,photo,price,quantity,category)
    VALUES(:title, :descrip, :photo, :price, :quant, :cat)");
   $st->bindValue(':title',$p->title);
   $st->bindValue(':descrip', $p->description);
   $st->bindValue(':photo',$p->photo);
   $st->bindValue(':price',$p->price);
   $st->bindValue(':quant',$p->quantity);
   $st->bindValue(':cat',$p->category);
   
   $st->execute();
  
  return "insert successfully..";

}

public  function store_product($pdo,Products $p)
{
   
}

public static function update_product($pdo,Products $p){
  
    $statement= $pdo->prepare("UPDATE productsr SET title = :tit , descriptions = :descr ,photo = :pho ,
    price = :price , quantity = :quant , category = :cat WHERE id = :id");
  
    $statement->bindValue(':tit',$p->title);
    $statement->bindValue(':descr',$p->description);
    $statement->bindValue(':pho',$p->photo);
    $statement->bindValue(':price',$p->price);
    $statement->bindValue(':quant',$p->quantity);
    $statement->bindValue(':cat',$p->category);
    $statement->bindValue(':id',$p->id);
    $statement->execute();
     
      return  "update successfully..";
 
}
}
?>