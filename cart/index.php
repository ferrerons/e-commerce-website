<?php
//connection to database
  session_start();
  $connect = mysqli_connect('localhost','root','','test');

?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Reza Solide</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      </head> 
      <body style="background: rgb(160,82,45);">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="panel.php" class="navbar-brand home">
      
      <img src="logo/ecom-store-logo.png" alt="Reza Solide Logo" class="hidden-xs">
      <img src="logo/ecom-store-logo-mobile.png" alt="Reza Solide Logo Mobile" class="visible-xs">
      
      </a>
    </div>
    <ul class="nav navbar-nav" style="font-family:sans-serif;">
      <li  class="active"><a href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li><a href="delete.php">Delete Account</a></li>
      <li><a href="update.php">Update Account</a></li>
      <li><a href="pay_offline.php">Pay Offline</a></li>
      <li><a href="login.php">Logout Account</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
  <div class="search-container">
    <form action="view.php" method="POST"><br>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
     
    </form>
  </div>
</div>
      </ul>
  </div>
</nav>

 <div class="container" id="slider"> <!-- container Begin -->
        
        <div class="col-md-12"><!-- col-md-12 Begin -->
            
            <div class="carousel slide" id="myCarousel" data-ride="carousel"><!-- carousel slide Begin -->
                
                <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li> 
                   <li data-target="#myCarousel" data-slide-to="2"></li> 
                   <li data-target="#myCarousel" data-slide-to="3"></li> 
                    
                </ol><!-- carousel-indicators Finish -->
                
                 <div class="carousel-inner"><!-- carousel-inner Begin -->
                  
                  <div class="item active">
                     <img src="slides_images/slide-5.jpg" alt="Slider 5" style="width:100%;">
                  </div>

                  <div class="item">
                    <img src="slides_images/slide-2.jpg" alt="Slider 2" style="width:100%;">
                  </div>
    
                  <div class="item">
                    <img src="slides_images/slide-1.jpg" alt="Slider 1" style="width:100%;">
                  </div>
                  
                  <div class="item">
                    <img src="slides_images/slide-4.jpg" alt="Slider 4" style="width:100%;">
                  </div>
                   
               </div><!-- carousel-inner Finish -->
               
                <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
                
            </div><!-- carousel slide Finish -->
            
        </div> <!-- col-md-12 Finish -->
        
    </div> <!-- container Finish -->
    
    
 <style>   /*advantages Styles*/
#advantages{
    text-align: center;
}
.box{
    background: #ffffff;
    margin: 0 0 30px;
    border: solid 1px #e6e6e6;
    box-sizing: border-box;
    padding: 20px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 3);
}
#advantages .box .icon{
    position: absolute;
    font-size: 120px;
    width: 100%;
    text-align: center;
    top: -20px;
    left: 0px;
    height: 100%;
    float: left;
    color: #dadada;
    box-sizing: border-box;
    z-index: 1;
}
#advantages .box h3{
    position: relative;
    margin: 0 0 20px;
    font-weight: 300;
    text-transform: uppercase;
    z-index: 2;
}
#advantages .box h3 a{
    color: #8B4513;
}
#advantages .box h3 a:hover{
    text-decoration: none;
}
#advantages .box p{
    position: relative;
    z-index: 2;
    color: #555555;
}
    </style>
    
     <div id="advantages"><!-- advantages Begin -->
        
        <div class="container"><!-- container Begin -->
            
            <div class="same-height-row"><!-- same-height-row Begin -->
                
                <div class="col-sm-4"><!-- col-sm-4 Begin -->
                    
                    <div class="box same-height"><!-- Box same-height-row Begin -->
                        
                        <div class="icon"><!-- icon Begin -->
                            
                            <i class="fa fa-heart"></i>
                            
                        </div> <!-- icon Finish -->
                        
                        <h3><a href="#">We Love Our Customer</a></h3>
                        
                        <p>We'll provide you the best service</p>
                        
                    </div><!-- Box same-height-row Begin -->
                    
                </div><!-- col-sm-4 Finish -->
                
                 <div class="col-sm-4"><!-- col-sm-4 Begin -->
                    
                    <div class="box same-height"><!-- Box same-height-row Begin -->
                        
                        <div class="icon"><!-- icon Begin -->
                            
                            <i class="fa fa-tag"></i>
                            
                        </div> <!-- icon Finish -->
                        
                        <h3><a href="#">Best Prices</a></h3>
                        
                        <p>Quality services at a lower price</p>
                        
                    </div><!-- Box same-height-row Begin -->
                    
                </div><!-- col-sm-4 Finish -->
                 <div class="col-sm-4"><!-- col-sm-4 Begin -->
                    
                    <div class="box same-height"><!-- Box same-height-row Begin -->
                        
                        <div class="icon"><!-- icon Begin -->
                            
                            <i class="fa fa-thumbs-up"></i>
                            
                        </div> <!-- icon Finish -->
                        
                        <h3><a href="#">100% Trusted Ecommerce Site</a></h3>
                        
                        <p>We just offer you the best and original products</p>
                        
                    </div><!-- Box same-height-row Begin -->
                    
                </div><!-- col-sm-4 Finish -->
                
            </div> <!-- same-height-row Finish -->
            
        </div><!-- container Finish -->
        
    </div><!-- advantages Finish -->
 <div id="hot"><!-- #hot Begin -->
    
        <div class="box"><!-- box Begin -->
            
            <div class="container"><!-- Container Begin -->
                
                <div class="col-md-12"><!-- col-md-12 Begin -->
                    
                    <h2>
                        Give your feet the beauty treatment that only brand new shoes can give.
                    </h2>
                    
                </div><!-- col-md-12 Finish -->
                
            </div><!-- Container Finish -->
            
        </div><!-- box Finish -->
        
        
    </div><!-- #hot Finish -->
                  
        <?php
    
    include("footer.php");
    
    ?>
      </body>  
 </html>