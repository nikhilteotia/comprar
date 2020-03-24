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
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
             <?php get_catname_in_cat_page(); ?>
            <p>The One-stop Shopping Destination "COMPRAR" E-commerce is revolutionizing the way we all shop. Why do you want to hop from one store to another in search of the latest products when you can find it on the Internet in a single click?</p>
        
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row ">

             <?php get_product_in_cat_page(); ?>

        </div>

           

         </div>
        <!-- /.row -->

       

        <!-- footer.php -->

   <?php include(TEMPLATE_FRONT .DS. "footer.php")   ?>

</body>

</html>
