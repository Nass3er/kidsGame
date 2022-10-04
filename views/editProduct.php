
<?php

/**  @var   $pdo \PDO */
require_once("../DB/database.php");

$id=$_GET['id'] ?? null;
$product=null;
if ($id) {
$statement= $pdo->prepare('SELECT * FROM productsr WHERE id = :id');

$statement->bindValue(':id',$id);
$statement->execute();
$product=$statement->fetch(PDO::FETCH_ASSOC);
}
?>
<?php include_once("header.php"); ?>
    <div class="createproduct mt-5 mb-5  ">
      
        <div class="container" style="width: 60%;" >

            <h3 class="mt-3 mb-3" style="font-weight: bold; ">update Product</h3>
        
            <form action="updateProduct.php" method="POST"  enctype="multipart/form-data" >
            
                    <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                 
               <div class="form-group mb-3">
                    <label for="title">title</label>
                    <input type="text" name="title" placeholder=" enter title" class="form-control" value="<?php echo $product['title'] ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description">description</label>
                    <input type="text" name="description" placeholder="enter description" class="form-control"  value="<?php echo $product['descriptions'] ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="photo">photo</label>
                    <input type="file" name="photo" placeholder=" choose image" class="form-control" value="<?php echo $product['photo'] ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="price">price</label>
                    <input type="text" name="price" placeholder="enter price" class="form-control"  value="<?php echo $product['price'] ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" placeholder="enter quantity" class="form-control"  value="<?php echo $product['quantity'] ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <input type="text" name="category" placeholder="enter category" class="form-control"  value="<?php echo $product['category'] ?>" required>
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