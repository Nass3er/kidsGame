<?php
require_once("../tables/product.php");
$p =new Products();
$imagePath='';
$errors=[];
if (isset($_POST['title'])) {
        $file_name= $_FILES['photo']['name'] ;    
        $file_size=$_FILES['photo']['size'] ;
        $file_tmp=$_FILES['photo']['tmp_name'];

        $exten=strtolower(end(explode(".",$file_name)));
        
        $extentions=array("png","jpg","jpeg");
        if ($file_size>2*1024*1024)  
            $errors[]="file more than 2mb not allowd";
        if(!in_array($exten,$extentions))
        $errors[]=" this file extention not allowd";
    
        if (empty($errors)) {
        $imagePath="uploadimage/".$file_name;
        move_uploaded_file($file_tmp,$imagePath);
            }
    $p->id=$_POST['id'];
    $p->title=$_POST['title'];
    $p->description=stripslashes($_POST['description']);
    $p->photo=$imagePath;
    $p->price=stripslashes($_POST['price']);
    $p->quantity=stripslashes($_POST['quantity']);
    $p->category=stripslashes($_POST['category']);
 
    if($res=Products::update_product($pdo,$p)){
      
       header('Location:products.php');
    } else{
 
        header('Location:products.php');
    }

}  else{
    header('Location:products.php');
}

?>