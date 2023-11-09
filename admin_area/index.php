<!--connect file-->©
<?php   
include('../includes/connect.php');
include('../Function/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!---bootstrap CSS link --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
    <!--CSS File-->
    <link rel="stylesheet" href="../assets/css/style.css">

    <style>
   .admin_image {
    width: 100px;
    object-fit: contain;
    }

    .footer {
        position: absolute;
        bottom: 0;
    }
    body{
         overflow-x:hidden;
    }
    .poduct_img{
      width:100px;
      object-fit:contain;
    }

    </style>

   
</head>
<body>

       <!--navbar -->
<div class="container-fluid p-0">
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="../assets/images/logo.png" alt="" class="logo">
    <nav class="navbar navbar-expand-lg">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
     </nav>
    </div>
   </nav>

   <!--second child-->
   <div class="bg light">
    <h3 class="text-center p-2">Manage Details</h3>
</div>
            <!--third child-->
            <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="p-3">
                        <a href="#"><img src="../assets/images/apple.jpg" alt="" class="admin_image"></a>
                        <p class="text-light text-center">Admin name</p>
                    </div>
                    <!--button><a href="" class="n-link text-light bg-info my-1"></a></button-->
                    <div class="button text-center">
                       <button class="my-3"><a href="insert_products.php" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                       <button><a href="index.php?view_products" class="nav-link text-light bg-info my-1">View Products</a></button>
                       <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                       <button><a href="index.php?view_categories" class="nav-link text-light bg-info my-1">View Categories</a></button>
                       <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                       <button><a href="index.php?view_brands" class="nav-link text-light bg-info my-1">View Brands</a></button>
                       <button><a href="index.php?all_order" class="nav-link text-light bg-info my-1">All Orders</a></button>
                       <button><a href="index.php?all_payment" class="nav-link text-light bg-info my-1">All Payments</a></button>
                       <button><a href="index.php?list_user" class="nav-link text-light bg-info my-1">List Users</a></button>
                       <button><a href="index.php?log_out" class="nav-link text-light bg-info my-1">Log Out</a></button>

                    </div>
                </div>
           </div>
                        <!--Fourth child-->
                        <div class="container my-5">
                        <?php
                        if(isset($_GET['insert_category'])){
                            include('insert_categories.php');
                        }

                        if(isset($_GET['insert_brand'])){
                            include('insert_brands.php');
                        }
                        if(isset($_GET['view_products'])){
                          include('view_products.php');
                      }
                      if(isset($_GET['edit_products'])){
                        include('edit_products.php');
                    }

                        if(isset($_GET['insert_products'])){
                            include('insert_products.php');
                        }

                        if(isset($_GET['delete_product'])){
                          include('delete_product.php');
                      }

                      if(isset($_GET['view_categories'])){
                        include('view_categories.php');
                    }
                    if(isset($_GET['delete_category'])){
                      include('delete_category.php');
                  }
                  if(isset($_GET['delete_brands'])){
                    include('delete_brands.php');
                }

                    if(isset($_GET['view_brands'])){
                      include('view_brands.php');
                  }

                  if(isset($_GET['edit_category'])){
                    include('edit_category.php');
                }

                if(isset($_GET['edit_brands'])){
                  include('edit_brands.php');
              }

                        if(isset($_GET['all_order'])){
                            include('all_orders.php');
                        }

                        if(isset($_GET['list_user'])){
                            include('list_users.php');
                        }

                        if(isset($_GET['all_payment'])){
                            include('all_payments.php');
                        }
                        ?>
                     </div>

            <!--last child-->
    <?php include("../includes/footer.php") ?>
      </div>



     <!--bootstrap js link-->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
       integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
       crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
       

               
            
      
</body>
</html>

