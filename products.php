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
       <?php 
       include 'includes/navb1.php';
        
       ?>
        
        <div class="container py-5">
            <div class="row ">
                <?php 
                 $con = mysqli_connect("localhost", "root","", "happystore")
    or die(mysqli_error($con));
                $sql= "select price,name,image  FROM camers";
                $result = mysqli_query($con, $sql);
                
                
                 for ($i=0;$i<=3;$i++){
                     $row= mysqli_fetch_array($result); ?>                
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="<?php echo $row['image'];?>" height="200"width=250"/>
                        <div class="caption">
                            <h3 class="text-center lead"><?php echo $row['name'];?></h3>
                            <p class="text-center lead">Rs<?php echo $row['price'];?></p>
                            <p><a href="login.html" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>
              
                <?php } ?>
            </div>
            <div class="row ">
                <?php 
                 $con = mysqli_connect("localhost", "root","", "happystore")
    or die(mysqli_error($con));
                $sql= "select price,name,image  FROM shirts";
                $result = mysqli_query($con, $sql);
                
                
                 for ($i=0;$i<=3;$i++){
                     $row= mysqli_fetch_array($result); ?>                
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail ">
                        <img src="<?php echo $row['image'];?>" height="200"width=250" />
                        <div class="caption">
                            <h3 class="text-center lead"><?php echo $row['name'];?></h3>
                            <p class="text-center lead ">Rs.<?php echo $row['price'];?></p>
                            <p><a href="login.html" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>
              
                <?php } ?> 
           </div>
            <div class="row ">
                <?php 
                 $con = mysqli_connect("localhost", "root","", "happystore")
    or die(mysqli_error($con));
                $sql= "select price,name,image  FROM camers";
                $result = mysqli_query($con, $sql);
                
                
                 for ($i=0;$i<=3;$i++){
                     $row= mysqli_fetch_array($result); ?>                
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="<?php echo $row['image'];?>" height="200"width=250"/>
                        <div class="caption">
                            <h3 class="text-center lead"><?php echo $row['name'];?></h3>
                            <p class="text-center lead">Rs. <?php echo $row['price'];?></p>
                            <p><a href="cart.php" role="button" class="btn btn-primary btn-block">Add to cart</a></p>
                        </div>
                    </div>
                </div>
              
                <?php } ?>
                    
                
                
            </div>
        </div>
       
        <?php 
        include 'includes/footer.php';
                
         ?>  
       
    </body>
    
</html>
