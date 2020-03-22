



<!--Row For Image and Short Description-->

<div class="row">

    <div class="col-md-7">
       <img class="img-responsive" height="720px" width="500px" src="<?php echo $row['product_image']; ?>" alt="">

    </div>

    <div class="col-md-5">

        <div class="thumbnail">
         

    <div class="caption-full">
        <h4><a href="#"><?php echo $row['product_title']; ?></a> </h4>
        <hr>
        <h4 class=""><?php echo $row['product_price']; ?></h4>

          
        <p><?php echo $row['product_description']; ?></p>

   
    <form action="">
        <div class="form-group">
            <a class="btn btn-primary" target="_blank" href="cart.php?add=<?php echo $row['product_id']; ?>">ADD TO CART</a>
        </div>
    </form>

    </div>
 
</div>

</div>


</div><!--Row For Image and Short Description-->


        <hr>


<!--Row for Tab Panel-->

<div class="row">

<div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
    

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">

   <p><?php echo $row['product_dsc']; ?></p>
           
    

    </div>
   

</div>


</div><!--Row for Tab Panel-->




