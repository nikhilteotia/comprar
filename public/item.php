<?php require_once("../resources/config.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- call to header.php -->

  <?php include(TEMPLATE_FRONT .DS. "header.php")   ?>
    
</head>

<body>

 <!-- call to  Navbar.php -->

    <?php include(TEMPLATE_FRONT .DS. "navbar.php")   ?>
  
<div class="container">

     

         <?php include(TEMPLATE_FRONT .DS. "categories.php")   ?>
 

<?php

$query = query("SELECT * FROM product WHERE product_id = " .escape_string($_GET['id']). " ");

  confirm($query);

  while ($row = fetch_array($query)):
    

?>


<div class="col-md-9">


  <!--Row For Image and Short Description-->

   <!-- call to  item_resources.php -->
 <?php include(TEMPLATE_FRONT .DS. "item_resources.php")   ?>



</div><!--  col-md-9 end here -->

 <?php endwhile; ?>

</div> <!-- container end here -->


<!-- call to footer.php -->
 <?php include(TEMPLATE_FRONT .DS. "footer.php")   ?>


</body>

</html>
