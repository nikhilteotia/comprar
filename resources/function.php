<?php


/*****************************HELPER FUNCTIONS***************************/

function set_message($msg){

  if(!empty($msg)){

    $_SESSION['message'] = $msg;
  }

  else{
    $msg="";
  }
 
}


function display_message(){

  if(isset($_SESSION['message'])){
     
     echo $_SESSION['message'];
     unset($_SESSION['message']);
   }
}



function redirect($location)
{
	header("Location: $location");
}


function query($sql)
{
	global $connection;
	return mysqli_query($connection, $sql);
}


function confirm($result)
{
    global $connection;
    if (!$result)
    	{
    		die("QUERY FAILED" .mysqli_error($connection));
    	}
}


function escape_string($string)
{
  global $connection;

  return mysqli_real_escape_string($connection, $string);

}



function fetch_array($result)
{

 return mysqli_fetch_array($result);

}




 /*************************************FRONT END FUNCTIONS****************************/




//get the product

function get_product()
{
  $query = query("SELECT * FROM product");

  confirm($query);

  while ($row = fetch_array($query)) 
  {  //can use for insert html tags in bulk 
  	 $product = <<<DETERMINER
<div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">

                            <img src="{$row['product_image']}">

                            <div class="caption">

                                <h4 class="pull-right">&#8377;{$row['product_price']}</h4>

                                 <a href='item.php?id={$row['product_id']}'>{$row['product_title']}</a>
                                
                                 <p class="text-left">{$row['product_description']} </p>

                                 



                            </div>
  
                               <a class="btn btn-primary" id="pac_mar" href="cart.php?add={$row['product_id']}">ADD TO CART</a>
                                 <a href="item.php?id={$row['product_id']}" class="btn btn-default"  id="pac_mar">More Info</a>
                            
                        </div>
                    </div>

 
DETERMINER;

echo $product;

  // &#8377; used for the rupee sign

  // href="item.php?id={$row['product_id']}" to have the id of the product
  	 
  	
  } 

}




// function for getting categories

function get_categories()
{
 
    $query = query("SELECT * FROM categories");

    confirm($query);


      while ($row = fetch_array($query)) 
  { 
  	 $category = <<<DETERMINER

      <a href='category.php?id={$row['cat_id']}' class='list-group-item' style='height:54px;'>{$row['cat_title']}</a>
 

DETERMINER;

echo $category;

}

}


//function shows the products in category bar


function get_product_in_cat_page()
{
  $query = query("SELECT * FROM product WHERE product_category_id = " .escape_string($_GET['id']). " ");

  confirm($query);

  while ($row = fetch_array($query)) 
  {  //can use for insert html tags in bulk 
     $product = <<<DETERMINER
<div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">

                            <img src="{$row['product_image']}">

                            <div class="caption">

                                <h4 class="pull-right">&#8377;{$row['product_price']}</h4>

                                 <a href='item.php?id={$row['product_id']}'>{$row['product_title']}</a>
                                
                                 <p class="text-left">{$row['product_description']} </p>

                                 



                            </div>
  
                               <a class="btn btn-primary" id="pac_mar" href="cart.php?add={$row['product_id']}">ADD TO CART</a>
                                 <a href="item.php?id={$row['product_id']}" class="btn btn-default"  id="pac_mar">More Info</a>
                            
                        </div>
                    </div>
DETERMINER;

echo $product;

}
}


// function shows the all products in shop section // 

function get_product_in_shop_page()
{
  $query = query("SELECT * FROM product");

  confirm($query);

  while ($row = fetch_array($query)) 
  {  //can use for insert html tags in bulk 
     $product = <<<DETERMINER

<div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">

                            <img src="{$row['product_image']}">

                            <div class="caption">

                                <h4 class="pull-right">&#8377;{$row['product_price']}</h4>

                                 <a href='item.php?id={$row['product_id']}'>{$row['product_title']}</a>
                                
                                 <p class="text-left">{$row['product_description']} </p>

                                 



                            </div>
  
                               <a class="btn btn-primary" id="pac_mar" href="cart.php?add={$row['product_id']}">ADD TO CART</a>
                                 <a href="item.php?id={$row['product_id']}" class="btn btn-default"  id="pac_mar">More Info</a>
                            
                        </div>
                    </div>
DETERMINER;

echo $product;

}
}


//HELP IN VERFIY USER AND LOGIN USER 


function login_user()
{

if (isset($_POST['submit'])) 
{
  $username = escape_string($_POST['username']);
   $password = escape_string($_POST['password']);
   

   $query = query(" SELECT * FROM user WHERE username='{$username}' AND user_password='{$password}'");

    confirm($query);


    $check = $query->num_rows;

   if( $check == 0)

   {
     set_message("user or password not found");
     redirect("login.php");
      
   }

   else
   {
     $_SESSION['username'] = $username;
      redirect("index.php");

   }





   }   
}


// help to send massage from contact.php



function send_message()
{

  if (isset($_POST['submit'])) 
  {

    $to           = 'nikhiltevtia@gmail.com';
    $from_name    = $_POST['name'];
    $email        = $_POST['email'];
    $subject      = $_POST['subject'];
    $message      = $_POST['message'];

    // echo "$from_name"."<br>";
    // echo "$email"."<br>";
    // echo "$subject"."<br>";
    // echo "$message"."<br>";


    $headers = "From: {$from_name} {$email}";

    $result  =  mail($to, $subject, $message, $headers);


    if (!$result) 
    {
      
       set_message("soory! we could not sent your message(mail server is not present)");
       redirect("contact.php");
    }


    else
    {
      set_message("your message is send yahooo :)");
      redirect("contact.php");
    }

   
  }

}




















/*************************************EXTRA FASHION FUNCTIONS****************************/


function get_catname_in_cat_page()
{
 
    $query = query("SELECT * FROM categories  WHERE cat_id = " .escape_string($_GET['id']). " ");
    confirm($query);


      while ($row = fetch_array($query)) 
  { 
     $category = <<<DETERMINER

      <h1>WELCOME TO {$row['cat_title']} SECTION </h1>
      
 

DETERMINER;

echo $category;

}

}






