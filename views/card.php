
<?php $totalcard=0.0 ?>

<?php include_once("header.php"); ?>

<div class="ms-5">
     <span  style="font-size:20px; font-weight:bold;">total : </span>
     <span style="font-size:15px; font-weight:bold;" id="sum"></span>
     <span >$</span>
     </div>
    <div class="card mt-5 mb-5">
        <div class="container">
            <div class="row">
            <?php if( isset($_SESSION['cart'])): ?>
               <?php  foreach ($_SESSION['cart'] as $item ):  ?>   
                    <div class="d-flex justify-content-around align-items-center" style="width:100%%">
                    <div>
                        <img class="img-fluid me-2" src="<?php echo $item['photo'] ?>" alt="" width="70px" height="70px">
                        <span style="width: 30%;"><?php echo $item['title'] ?></span>
                    </div>
                    <div class="ps-3 d-flex justify-content-between align-items-center" style="width: 50%;">
                        <div class="btn-group btn-increase2" style="width: 25%; height:30px;" role="group">
                            <button type="button" class="btn ">+</button>
                            <button type="button" class="btn"><?php echo $item['quantity'] ?></button>
                            <button type="button" class="btn ">-</button>
                        </div>

                        <span  class="" style="width: 30%; font-weight:bold;"><?php echo $item['price'] * $item['quantity']  ?>$</span>
                        <form style="display:inline" action="cancelCard.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                            <input type="hidden" name="count" value="<?php echo $item['quantity'] ?>">
                            <button type="submit"class="cancel-card btn">X </button>
                        </form> 
                    </div>
                   
            </div>
            <?php $totalcard +=$item['price'] * $item['quantity']; ?>
            <script>
                document.getElementById('sum').innerHTML= <?php echo $totalcard?> ;
            </script>
            <hr>
            <?php endforeach; ?>
            <?php endif ?>
                   
            </div>
        </div>
    </div>
    <script src="../js/all.min.js"  > </script>
    <script src="../js/bootstrap.bundle.min.js"  > </script>
    <script src="../js/bootstrap.bundle.min.js.map"  > </script>
    <script src="../js/myfile.js"></script>
</body>
</html>