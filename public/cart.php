<?php require_once("../resources/config.php"); ?>


 

  <!-- cart functions -->


<?php 

     
   // add the product in cart by increment of 1

    if (isset($_GET['add'])) 
    {


     	// $_SESSION['product_'.$_GET['add']] +=1;

     	// redirect("index.php");

        $query = query("SELECT * FROM product WHERE product_id=" .escape_string($_GET['add'])." ");

        confirm($query);

        while ($row = fetch_array($query))
        {
        	

              if($row['product_quantity'] != $_SESSION['product_'.$_GET['add']] )
              {

                   $_SESSION['product_'.$_GET['add']] +=1;
                   redirect("checkout.php");

              }


              else
              {

                  set_message("we only have " . $row['product_quantity'] ." ". $row['product_title'] . " Available");

                  redirect("checkout.php");



              }
        }
    }




    // remove the product in cart by decrement of 1

    if(isset($_GET['remove']))
     {
     	 $_SESSION['product_'.$_GET['remove']] -- ;


     	 if($_SESSION['product_'.$_GET['remove']] < 1)
     	 {
     	 	unset($_SESSION['item_total']);
            unset($_SESSION['item_quantity']);
     	 	
     	 	redirect("checkout.php");
     	 }

     	 else
     	 {
     	 	redirect("checkout.php");
     	 }
        
    }




    // delte the product in cart
    
    if(isset($_GET['delete']))
     {
     	 $_SESSION['product_'.$_GET['delete']] = '0';

         unset($_SESSION['item_total']);
         unset($_SESSION['item_quantity']);



         redirect("checkout.php");
     	 
        
     }





// helps in showing of product in cart and hellp in functalty of the cart


 function cart()
 {
 	 $total = 0;
 	 $quantity = 0;


   foreach ($_SESSION as $name => $value) 
   {

   	 if($value > 0)
   	 {


   	 	 if( substr($name, 0 , 8 ) == "product_" )
   	     {

         $length = strlen($name);

         $length = $length - 8;

         $id = substr($name, 8 , $length);

          
          $query = query("SELECT * FROM product WHERE product_id = " .escape_string ($id)."");
          confirm($query);
    
          while ($row = fetch_array($query)) 
        
           {
               

                $sub = $row['product_price'] * $value;
                $quantity += $value;

     	        $product = <<<DELIMETER

     	        <tr>
                <td>{$row['product_title']}</td>
                <td>&#8377;{$row['product_price']}</td>
                <td>{$value}</td>
                <td>&#8377;{$sub}</td>
                <td>
                <a class="btn btn-warning" href="cart.php?remove={$row['product_id']}"><span class="glyphicon glyphicon-minus "></span></a>

                
                <a class="btn btn-success" href="cart.php?add={$row['product_id']}"><span class="glyphicon glyphicon-plus "></span></a>

                <a class="btn btn-danger"  href="cart.php?delete={$row['product_id']}"><span class="glyphicon glyphicon-remove "></span></a>

                </td>


                 </tr>
DELIMETER;

                 echo $product;

                 
              

         	
             }

             $_SESSION['item_total'] = $total += $sub; 

             $_SESSION['item_quantity'] = $quantity ; 
        }
	}
   	
   	  

   }

 }


?>