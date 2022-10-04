<?php
session_start();
$items_in_cart=0;
 if (isset($_SESSION['cart'])) {
   $items_in_cart = is_array($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ;
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kidGames</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css.map">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

<div class="nvb">
        <div class="container " style="margin-top:80px;">
            <nav class="navbar fixed-top">
                <div class="container-fluid">
                 <div>
                 <a class="navbar-brand text-black" href="#"><img src="../images/kidlogo1.jpg" width="70px" height="45px" alt="" style="border-radius:30px;"></a>
                 <span>
                   <span><a class="" href="card.php"><i class="fa-solid fa-cart-shopping text-white" style="font-size:25px;"></i></a></span>
                   <span class="noti-acount"><?php echo $items_in_cart ?></span>
                 </span>
                  
                 </div>
                 
                  <button class="navbar-toggler  "   type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class=" navbar-toggler-icon navbar-light-toggler-icon-bg"  ></span>
                   
                  </button>
                  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                      <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body sidbar">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="products.php">products</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="createProduct.php">createProduct</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="information.php">information about project</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="explainProject.php">explain project</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="showpresentation.php">show presentation</a>
                        </li>
                        <?php
                        if (isset($_SESSION['userEmail']) and $_SESSION['userEmail'] !=null) {
                          echo'<li class="nav-item">
                            <a class="nav-link" href="../tables/logout.php">logout</a>
                           </li>';
                            } else{
                              echo'<li class="nav-item">
                               <a class="nav-link" href="login.php">login</a>
                              </li>';
                            }


                            ?>

                        
                        <li class="nav-item">
                            <a class="nav-link" href="register.php">register</a>
                          </li>
                        
                      </ul>
                    
                    </div>
                  </div>
                </div>
              </nav>
        </div>
    </div>