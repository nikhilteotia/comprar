<?php require_once("../resources/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include(TEMPLATE_FRONT .DS. "header.php")   ?>


</head>

<body>

      <!-- Navigation -->
    <?php include(TEMPLATE_FRONT .  "/navbar.php");?>


    <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">

      <h1>Checkout</h1>

<form action="">
    <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>apple</td>
                <td>$23</td>
                <td>3</td>
                <td>2</td>
              
            </tr>
        </tbody>
    </table>
</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount">4</span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th>
<td><strong><span class="amount">$3444</span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


         
       <!-- link for footer.php -->

       <?php include(TEMPLATE_FRONT .  "/footer.php");?>

</body>

</html>