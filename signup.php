<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>Sign Up</title>
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
                        <li><a href="login.html"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="signup.html"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                    </ul>
					
				</div>
				
			</div>
    </nav>
    <div class="container">
        <div class="row">
        <div class="col-sm-3 col-sm-offset-2">
            <img src="img/e6.jpg "/>
        </div>
         <div class="col-sm-5  ">
                <h1>SIGN UP</h1>
                <form  action="sphp/signupscript.php" method="POST">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="User Name" name="name"  required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Email"  name="e-mail" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                </div>
                <div class="form-group">
                    <input  type="text" class="form-control"  placeholder="City" name="city" required>
                        </div>
                   
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
    </div>
         <footer>
      <div class="container">
          <center>
              <p>Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>	
          </center>
      </div>
  </footer>      
     </body>

</html>


