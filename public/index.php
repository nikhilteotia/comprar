<?php require_once("../resources/config.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- header.php -->

  <?php include(TEMPLATE_FRONT .DS. "header.php")   ?>


</head>

<body>

    <!-- Navbar.php -->

    <?php include(TEMPLATE_FRONT .DS. "navbar.php")   ?>
    

    <!-- Page Content -->
    <div class="container-fluid">

        <div class="row">

            <!-- categories.php -->

            <?php include(TEMPLATE_FRONT .DS. "categories.php")   ?>

            <div class="col-md-9">

              <!-- carousel.php -->

              <?php include(TEMPLATE_FRONT .DS. "carousel.php")   ?>

            </div>



        </div>
   
     </div>


     <div class="container">
       
       
       <div class="row">
         
           <?php include(TEMPLATE_FRONT .DS. "product.php" );  ?>

       </div>
 

     </div>
    

   <!-- footer.php -->

   <?php include(TEMPLATE_FRONT .DS. "footer.php")   ?>


</body>

</html>
