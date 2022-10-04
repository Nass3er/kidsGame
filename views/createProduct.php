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
        
    $p->title=$_POST['title'];
    $p->description=stripslashes($_POST['description']);
    $p->photo=$imagePath;
    $p->price=stripslashes($_POST['price']);
    $p->quantity=stripslashes($_POST['quantity']);
    $p->category=stripslashes($_POST['category']);
 
    if($res=Products::create_product($pdo,$p)){
        echo "<h2 style='color:green;'> $res </h2>";
    } else{
        echo "</h2 style='color:red;'> not added ..?? </h2>";
    }


}  else{
    echo "<h3>there are property not has value </h3> ";
}

?>

 
<?php include_once("header.php"); ?>
    <div class="createproduct mt-5 mb-5  "  >
    <?php if(!empty($errors)): ?>
        <div class="alert-danger">
          <?php foreach ($errors as $error ): ?> 
                <div> <?php  echo $error  ?></div>
            <?php  endforeach; ?>
           <?php endif; ?>
        </div>
        <div class="container" style="width: 60%;" >

            <h3 class="mt-3 mb-3" style="font-weight: bold; ">Create Product</h3>
        
            <form action="<?php $_SERVER['PHP_SELF']?>" method="POST"  enctype="multipart/form-data" >
                <div class="form-group mb-3">
                    <label for="title">title</label>
                    <input type="text" name="title" placeholder=" enter title" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description">description</label>
                    <input type="text" name="description" placeholder="enter description" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="photo">photo</label>
                    <input type="file" name="photo" placeholder=" choose image" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="price">price</label>
                    <input type="text" name="price" placeholder="enter price" class="form-control"required>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" placeholder="enter quantity" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <input type="text" name="category" placeholder="enter category" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <button class="btn btn-primary" type="submit">submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="../js/all.min.js"  > </script>
    <script src="../js/bootstrap.bundle.min.js"  > </script>
    <script src="../js/bootstrap.bundle.min.js.map"  > </script>
    <script src="../js/myfile.js"></script>
</body>
</html>