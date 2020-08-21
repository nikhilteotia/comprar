<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
              
                  <a  class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span>  COMPRAR</a>
               
            </div>  
            <!--  Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a  href="shop.php">Shop</a>

                    </li>
                    
                     <li>
                        <a href="checkout.php">Checkout</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>

                    <!-- <li>
                        <a href="about.php">about us</a>
                    </li> -->

                </ul>

                <ul class="nav navbar-nav navbar-right">
               
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href=""><span class="glyphicon glyphicon-user"></span><?php echo " ".$_SESSION['username']." ";  ?></a></li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>