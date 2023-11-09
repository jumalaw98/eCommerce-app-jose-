<!--connect file-->
<?php   
include('includes/connect.php');
include('Function/common_function.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ecommerce Website</title>

    <!---bootstrap CSS link --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--CSS File-->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<!--navbar -->
<div class="container-fluid p-0">

<!--first child -->
<nav class="navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="assets/images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Products</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="./users_area/user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup><?php cart_item();?></sup></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Total Price:<?php total_cart_price();?>/=</a>
        </li>
      </ul>
      <form class="d-flex" action="" method="get">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
      <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
    </form>
    </div>
  </div>
</nav>

    <!--Calling cart function-->
    <?php
    cart(); 
    ?>

       <!--Second child-->
       <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
          <ul class="navbar-nav me-auto">
              <?php 
          if(!isset($_SESSION['username'])){
            echo " <li class='nav-item'>
            <a class='nav-link' href='#'>Welcome Guest</a>
            </li>";   
          }else{
            echo "<li class='nav-item'>
            <a class='nav-link'#'>Welcome ".$_SESSION['username']."</a>
           </li>";
          }
     if(!isset($_SESSION['username'])){
      echo " <li class='nav-item'>
      <a class='nav-link' href='./users_area/user_login.php'>Login</a>
      </li>";   
    }else{
      echo "<li class='nav-item'>
      <a class='nav-link' href='./users_area/logout.php'>Logout</a>
     </li>";
    }
  
    ?>
    </ul>
   </nav>
 
          <!--- third child -->
     <div class="bg-light">
     <h2 class="text-center">Hidden Store</h2>
     <p class="text-center">Communication is at the heart of the e-commerce and community</p>


         <!--fourth child-->
     <div class="row px-1">
        <div class="col-md-10">

           <!--products-->
      <div class="row">
       
  <!--fetching products-->
       <?php  
    
    //calling functions
  search_product();
  get_unique_categories();
  get_unique_brands();
        ?>
<!--row end-->
</div>

<!--col end--
  <div class="col-md-4 mb-2">
        <div class="card">
        <img src="./images/apple.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text 
        to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
  </div>
  

  <div class="col-md-4 mb-2">
        <div class="card">
        <img src="./images/capsicum.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
    <p class="card-text">Some quick example text 
        to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Add to Cart</a>
    <a href="#" class="btn btn-secondary">View More</a>
  </div>
  </div> 
 </div> -->
           
   </div>
  <div class="col-md-2 bg-secondary p-0">
    <!--brands to be displayed-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
      </li>

      <?php 
      getbrands();
      ?>
     </ul>

          <!--Categories-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav-item bg-info">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>
      <?php 
      getcategories();
     
    
      
      ?>
      
     </ul>

    </div>
 
    
  
    
        


<!--last child-->
<!--include footer-->

<!--<?php include("./includes/footer.php") ?> -->
      </div>




<!--bootstrap js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>




</body>
</html>