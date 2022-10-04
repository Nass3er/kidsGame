
<?php
require_once("../tables/Users.php");
$u =new Users();

if (isset($_POST['userEmail']) && isset($_POST['userPassword']) && isset($_POST['userName'])) {

   
    if($res=$u->create_user($pdo,$_POST['userName'],$_POST['userEmail'], $_POST['userPassword'])){
        echo "<h2 style='color:green;'> $res </h2>";
    } else{
        echo "</h2 style='color:red;'> not added ..?? </h2>";
    }
}
?>
<?php include_once("header.php"); ?>

    <div class="register mt-5 mb-5 ">   
       <div class="box1">
                    <div class="bord  p-5 ">
                    <h4 class="header text-center mt-4 mb-4">register</h4>
                    <form class="" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                       <div class="form-group mb-3  ">
                            <label for="userEmail">name:</label>
                            <input type="text" class="form-control" placeholder="Enter name"  name="userName" id="" required>
                        </div>
                        <div class="form-group mb-3  ">
                            <label for="userEmail">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter email"  name="userEmail" id="" required>
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="userPassword">password:</label>
                            <input type="password" class="form-control" placeholder="Enter password"  name="userPassword" id="passin1" required >
                        </div>
                        <div class="form-group mb-3  ">
                            <label for="userPassword">confirm password:</label>
                            <input type="password" class="form-control" placeholder="confirm password"  name="confirmPass" id="passin2"     onkeyup='checkPass();' required>
                            <span class=" fs-10" id="passnoti"> </span>
                        </div>   
                        <div class="form-group text-center">
                             <button  class="btn btn-primary rounded-pill ps-4 pe-4 m-3" type="submit">register</button>
                        </div>
                    </form>
                   <div class="text-center">
                    <a href="#" class="text-center"> has acount-></a>
                   </div>
                </div>
              </div>  
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>