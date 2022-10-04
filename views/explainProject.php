<?php include_once("header.php"); ?>

 <div class="explain mt-5 mb-3">
    <div class="container">
        <h1 class="text-center mb-5">EXPLAIN PROJECT</h1>

        <h5>introduction </h5>
        <p class="text-black-50"> first we make this project for bussines and salles and paid product of kids Games
            whene user registet on our website he/she can purchase any product he want , the website has the 
            validation on login/register and session for each users , also the user can make logout from his session 
            ,website has many pages we will justify bellow :
        </p>
        <h5>index page</h5>
        <ul>
            <li>1- cover page of project </li>
             <li> 2-the user start from this page </li>
             <li>3- when click on the menu of right corner or "get started" button will appear the list of option (products –login-logout –register-information about project –explanation of project ). </li>
             <li><a href="index.php">click her to index page </a></li>
        </ul>

        <h5>products page</h5>
        <ul>
             <li>  1-contain of the all products and category</li>
             <li> 2- the customer can choose products from this page. </li>
             <li>3-also can search about products here by prices or title </li>
              <li>4- admin can edit or delete product from this page by the icones edit and delete</li>
             <li><a href="products.php">click here to products page </a></li>
        </ul>
        <h5>show selected product page</h5>
        <ul>
             <li> 1- increase the number of product quantity want. </li>
             <li> 2- add the product to the cart . </li>
             <li>3- see the description of product choosen. </li>
             <li><a href="showProduct.php">click here to show page </a></li>
        </ul>
        <h5>card page</h5>
        <ul>
             <li>1-show the product that the user selected or he want.</li>
             <li>  2- increase or decrease the number of quantity . </li>
             <li>3- see the number of product selected . </li>
             <li>4- cancel the product from cart.</li>
             <li><a href="card.php">click here to show page </a></li>
        </ul>
        <h5>login page</h5>
        <ul>
             <li>1-when user click add button if the user has account in our database the product adding , but if he don't has account in database
                  the website will move him to the login page or regiser page.</li>
              
             <li><a href="login.php">click here to show page </a></li>
        </ul>
        <h5>register page</h5>
        <ul>
             <li>1-when user click add button if the user has account in our database the product adding , but if he don't has account in database
                  the website will move him to the login page or regiser page.</li>
             <li><a href="register.php">click here to show page </a></li>
        </ul>
        <h5>create product page</h5>
        <ul>
             <li>1-the admin can create the product from this page </li>
                 <li><a href="crateProduct.php">click here to show page </a></li>
        </ul>
        <h5>information about project page</h5>
        <ul>
             <li>this page has the information about project </li>
                 <li><a href="information.php">click here to show page </a></li>
        </ul>
    </div>
 </div>
 <?php include_once("footer.php"); ?>

 </body>
 </html>