<?php require_once("../resources/config.php") ?>


 <!DOCTYPE html>
<html lang="en">

<head>

  <!-- header.php -->

  <?php include(TEMPLATE_FRONT .DS. "header.php")   ?>
  <link rel="stylesheet" type="text/css" href="css/login.css">


</head>

<body>

    <!-- Navigation -->
    
    <?php include(TEMPLATE_FRONT .DS. "navbar.php")   ?>

    <!-- Page Content -->
    <div class="container">

      <div class="sidenav">
         <div class="login-main-text">
            <h2>HIGHBEATS<br> Login Page</h2>
            <p>Login from here to access.</p>
         </div>
      </div>

     
      <header>
            <h1  class="col-md-12 text-center ">Login</h1>
            <h5 class="text-center" id="ni" > <?php display_message(); ?></h5>

            <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">

                 <?php login_user(); ?>
                <div class="form-group"><label for="">
                    username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="Password" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-black" name="submit">Login</button>

                
                </div>
            </form>
        </div>
        </div>  


    </header>


        </div>

    </div>
    <!-- /.container -->

    <?php include(TEMPLATE_FRONT .DS. "footer.php")   ?>

</body>

</html>
