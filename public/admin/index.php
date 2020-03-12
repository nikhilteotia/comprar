<?php require_once("../../resources/config.php") ?>
<?php if (!isset($_SESSION['username'])) { redirect("../../public");} ?>

<!DOCTYPE html>
<html lang="en">

<head>

     <?php include(TEMPLATE_BACK .DS. "header.php")?>

</head>

<body>

   <div id="wrapper">

        <?php include(TEMPLATE_BACK .DS. "back_navbar.php")?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- check the link in the directory -->

                <?php 

                    if ( $_SERVER['REQUEST_URI'] == "/ecomm/public/admin/" || $_SERVER['REQUEST_URI'] == "/ecomm/public/admin/index.php"  ) 
                   {
                        // link to /back/admin_content

                        include(TEMPLATE_BACK .DS. "admin_content.php");

                   }

                   //send to back/order.php


                   if (isset($_GET['orders'])) 
                   {
                         
                        include(TEMPLATE_BACK .DS. "orders.php"); 
                   }

                  // send to 

                    if (isset($_GET['view'])) 
                   {
                         
                        include(TEMPLATE_BACK .DS. "products.php"); 
                   }

                 // send to add_product.php

                    if (isset($_GET['add'])) 
                   {
                         
                        include(TEMPLATE_BACK .DS. "add_product.php"); 
                   }

                 // sent to categories.php

                    if (isset($_GET['categories'])) 
                   {
                         
                        include(TEMPLATE_BACK .DS. "categories.php"); 
                   }

                // sent to users.php

                  if (isset($_GET['users'])) 
                   {
                         
                        include(TEMPLATE_BACK .DS. "users.php"); 
                   }

                

                ?>
                   

                
            
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   </div>
    <!-- /#wrapper -->


    <!-- link to back/footer.php -->
     <?php include(TEMPLATE_BACK .DS. "footer.php")?>

   

</body>

</html>
