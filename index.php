<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
        <title>Welcome | Online Shopping</title>
        <meta charset="UTF-8">
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cardo|Chenlax|CrimsonText"/>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<!--jQuery library--> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!--Latest compiled and minified JavaScript--> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
                 <link type="text/css" href="css/style.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
</head>
<body>
		<!-- Header -->
       <nav class="navbar navbar-default navbar-fixed-top">
	
            <div class="container">
                <div class="navbar-header ">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
		<a class="navbar-brand" href="index.php">Happy Store</a>
					
                </div>
				
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
			<li><a href="signup.html"><span class="glyphicon glyphicon-plus-sign"></span> More</a></li>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li></li>
                    </ul>
					
		</div>
				
			</div>
       </nav>
       
	   <div class="container-fluid">
					
    <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                              <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner">
                                    <div class="item active">
                                      <img src="img/banner.png" alt="sale">
                                            <div class="carousel-caption">	
                                                    <center>
                                                            <h1>We sell lifestyle.</h1>
                                                            <p>Flat 40% OFF on premium brands </p>
                                                            <br/>
                                                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                                                    </center>
                                            </div>
                                    </div>

                                    <div class="item">
                                      <img src="img/1.jpg" alt="Camera">

                                    </div>

                                    <div class="item">
                                      <img src="img/sale.jpg" alt="sale2">
                                    </div>
                              </div>

						  <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                      <span class="glyphicon glyphicon-chevron-left"></span>
                                      <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                      <span class="glyphicon glyphicon-chevron-right"></span>
                                      <span class="sr-only">Next</span>
                                </a>
						</div>
			</div>
        </div>
         <div class="container">
            <div class="row text-center" id="item_list">
                <div class="col-sm-4 ">
                    <a href="products.php#cameras" >
                        <div class="thumbnail">
                            <img src="img/1.jpg" alt="">
                            <div class="caption">
                                <h3>Cameras</h3>
                                <p>Choose among the best available in the world.</p>
                            </div>
                        </div> 
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="products.html#watches" >
                         <div class="thumbnail">
                            <img src="img/10.jpg" alt="">
                             <div class="caption">
                              <h3>Watches</h3>
                              <p>Original watches from the best brands.</p>
                             </div>
                         </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#clothes" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Shirts</h3>
                                    <p>Our exquisite collection of shirts.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>

        <!--Footer-->
        <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
                </center>
            </div>
        </footer>
        <!--Footer end-->
    </body>
</html>
