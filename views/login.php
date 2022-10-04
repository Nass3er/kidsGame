
<?php 
 session_start();
 require_once("../tables/loginVerify.php");
 $verify=new Verify();
 if (isset($_SESSION['userEmail']) and $_SESSION['userEmail'] !=null) {
    header('Location:index.php');
    exit;
 }
 ?>

<?php include_once("header.php"); ?>
    <div class="login mt-5 mb-5 ">
        


                <div class="box1">
                    <div class="bord  p-5 ">
                    <h4 class="header text-center mt-4 mb-4">Login</h4>
                    <form class="" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="form-group mb-3  ">
                            <label for="userEmail">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter email" name="userEmail" id="" required>
                        </div>
                        <div class="form-group mb-3 ">
                            <label for="userPassword">password:</label>
                            <input type="password" class="form-control" placeholder="Enter password" name="userPassword" id="" required>
                        </div>
                        <a href="#"> forget password?</a>

                        <div class="form-group text-center">
                             <button  class="btn btn-primary rounded-pill ps-4 pe-4 m-3" type="submit">login</button>
                        </div>
                    </form>
                   <?php

                    if (isset($_POST['userEmail']) and $_POST['userEmail'] !=null and
                      isset($_POST['userPassword']) and $_POST['userPassword'] !=null )
                      {
                        $username= stripslashes($_POST['userEmail']);
                          $pass=stripslashes($_POST['userPassword']);
                           

                        if($verify->verifyUser($pdo,$username,$pass)){
                          
                          echo "<h6 style='color:#3626cd'>loging successfullly... </h6>";
                          
                            $_SESSION['userEmail']=$username;
                            $_SESSION['userPassword']=$pass;
                          echo' 
                          <script type="text/javascript">
                            setTimeout(function(){
                                window.location.href="index.php";
                            },2000);
                          </script> ';
                          
                        } else{
                        echo "<h6 style='color:red'> login faild </h6>   ";
                       }
                  } 
                  ?>
                </div>
                </div>
            
         
    </div>
    <?php include_once("footer.php"); ?>
</body>
</html>