<?php
// require_once("../tables/allproducts.php");
require_once("../DB/database.php");
$search=$_GET['search'] ?? '';

if ($search) {
    $statement=$pdo->prepare('SELECT * FROM productsr WHERE title LIKE :tit');
    $statement->bindValue(':tit', "%$search%" );
}else {
$statement=$pdo->prepare('SELECT * FROM productsr ');
}  
$statement->execute();
$products=$statement->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include_once("header.php"); ?>
    <div class="product mt-5 ">
        <div class="container-fluid ms-3 me">
            <div class="row">
                <span class="col-xs-3 col-sm-3 col-md-3 col-lg-3 cat" style="border-right: 2px solid black;">
                   <h2>Categories</h2>
                   <ul class="list-unstyled">
                       <li >cartoon </li>
                       <li>sport</li>
                       <li>Vehicle models</li>
                       <li>Baby&Toddler</li>
                       <li>Learning Toys</li>
                       <li>Action games</li>
                       <li>Intelligence&puzzle Toys</li>
                   </ul>
                  <a href="" class="btn btn-filter ps-5 pe-5 ">Filter</a>
                 <div class="separate"></div>

                <h2 class="mt-3">Price</h2>
                <form action="" method="post" class="selectpriceinput">
                    <input type="text" name="min" placeholder="Min" >
                    <input type="text" name="max" id="" placeholder="Max">
                </form>
                  <a href="#" class="btn btn-setprice mt-4 ps-4 pe-5 mb-3">Set Price</a>
                </span>
                 
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 justify-content-center">

                <div class="row">
                    <form action="" method="get">
                       <div class="form-group me-5 mt-3 mb-3 justify-content-center">
                           <input type="text" name="search" placeholder="search" class="form-control">
                       </div>
                    </form>
                    <?php foreach($products as $product) : ?>
                    <div class="card m-3" style="width: 12rem; border-radius: 17px;">
                        <img src="<?php echo $product['photo'] ?>" class="card-img-top" alt="...">
     
                       <div class="card-body border-top pb-0 ps-0 pe-0">
                           <div class="d-flex">
                              <?php if(isset($_SESSION['userEmail'])) : ?>
                               <a href="../tables/deleteProduct.php ?id=<?php echo $product['id'] ?>"><i class="fas fa-trash-alt text-danger me-1"></i></a>
                               <a href="editProduct.php ?id=<?php echo $product['id'] ?>"><i class="fas fa-edit text-primary me-1"></i></a>
                              <?php endif ;?>
                           <h5 class="card-title"><?php echo $product['title'] ?></h5>
                           </div>
                         
                           <div class="d-flex justify-content-between align-items-center mt-2 ">
                              <div>
                                    <span class="text-black-50">price</span>
                                    <h6><?php echo $product['price'] ?> $</h6>
                              </div>
                               <a href="showProduct.php?id=<?php echo  $product['id']?>" class="btn btn-white ps-3 pe-3 add">Add</a>
                           </div>
                        
                        </div>
                    </div>
                    <?php endforeach ; ?>       
                </div>
                   

            </div>
                    
                 
                
            </div>
        </div>
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>

