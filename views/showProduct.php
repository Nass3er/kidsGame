<?php 
require_once("../DB/database.php");
$id=$_GET['id'] ?? null;

if (!$id) {
    header('Location:index.php');
    exit;
}
$statement= $pdo->prepare("SELECT * FROM productsr WHERE id = :id");
$statement->bindValue(':id',$id);
$statement->execute();
$product =$statement->fetch(PDO::FETCH_ASSOC);
?>
<?php include_once("header.php"); ?>
    <div class="showproduct mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="container">
                        <img class="img-fluid" src="<?php echo $product['photo'] ?>" width="300px" height="250px" alt="" style="border-radius: 25px;">
                    </div>
                 
                </div>
                <div class="col-md-6 col-lg-6" style="border-left: 1px solid black;">
                    <span class="b-2 d-inline"><span style="font-size:20px;font-weight:bold;">Category : </span><?php echo $product['category'] ?></span>
                    <h4><?php $product['title'] ?></h4>
                    <p class="text-black-50"> <?php echo $product['descriptions'] ?></p>
                    <h2>$ <span><?php echo $product['price'] ?></span></h2>
                    <hr>
                    <span class="text-black-50">Quantity: <?php echo $product['quantity'] ?></span>
                    <div class="d-flex justify-content-between align-items-center me-5">
                        <div class="btn-group btn-increase" role="group">
                            <button type="button" class="btn plus-action" onclick="plusfunc(<?php echo $product['price'] ?>);">+</button>
                            <button type="button" class="btn" id="quant">1</button>
                            <button type="button" class="btn minus-action" onclick="minusfunc(<?php echo $product['price'] ?>);">-</button>
                         </div>
                         <div>
                           <span>total: <span style="font-size:25px; font-weight:bold;" id="total"><?php echo $product['price'] ?></span></span><span>$</span>
                         </div>     
                    </div>
                    <form style="display:inline" action="addToCard.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
                        <input type="hidden" name="count"  id="valcount">
                        <button type="submit" class="btn btn-setprice mt-3" style="width: 25rem; ">ADD TO CARD</button>
                   </form> 
                    <!-- <a class="btn btn-setprice mt-3" style="width: 25rem; " href="" >ADD TO CARD</a> -->
                </div>
            </div>
        </div>
    </div>

    <?php include_once("footer.php"); ?>

</body>
</html>