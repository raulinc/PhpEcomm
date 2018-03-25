<!doctype HTML>
<html>
    <head>
        <title>
            Welcome | Happy Store
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                <link type="text/css" href="css/style.css" rel="stylesheet"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <nav class="navbar bg-info navbar-default">
            <div class="container">
                <h2 class="display-4 text-white">Happy Store</h2>
                <div class="row float-right">
                    <a class="nav-item nav-link text-white" data-toggle="modal" data-target="#exampleModal">Login</a>
                    <a class="nav-item nav-link text-white " href="cart.php">Cart</a> 
                    <a class="nav-item nav-link text-white " href="About Us.php">About Us</a>  
                </div>   
            </div>
                        
        </nav>
        <div class="container">
            <div class="row">
           <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
             <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form class='form-group'>
              <input class="form-control" type='text' name='name' placeholder="User Id"/>
              <input class="form-control" type='password' name='pass' placeholder="Password"/>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
      </div>
        <div class="modal-footer">
            <p>Don't have an account</p>
            <button type="button" class="btn btn-primary"><a class="text-white" href="signup.php">SignUp</a></button>
       
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
                 
        <div class="container-fluid bg-info fixed-bottom">
            <p class="text-center text-white">Copyright &copy; Lifestyle Store. All Rights Reserved  |  Contact Us: +91 90000 00000</p>
        </div>       
        
    </body>
    
</html>
