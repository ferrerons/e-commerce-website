<?php
//connection to database
  session_start();
  $connect = mysqli_connect('localhost','root','','test');
 
    if(isset($_POST["add_to_cart"]))
    {
      if(isset($_SESSION["shopping_cart"]))
      {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
          $count = count($_SESSION["shopping_cart"]);
    //get all item detail
            $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'product_img'   =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_size'     =>   $_POST["size"],
                      'item_quantity' =>   $_POST["quantity"]

            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
          //product added then this block 
          echo '<script>alert("Item allready added ")</script>';
          echo '<script>window.location = "shop.php"</script>';
        }
      }
      else
      {
        //cart is empty excute this block
         $item_array = array(
                      'item_id'       =>   $_GET["id"],
                      'product_img'   =>   $_POST["hidden_image"],
                      'item_name'     =>   $_POST["hidden_name"],
                      'item_price'    =>   $_POST['hidden_price'],
                      'item_size'     =>   $_POST["size"],
                      'item_quantity' =>   $_POST["quantity"]

            );
           $_SESSION["shopping_cart"][0] = $item_array;
      }
    }
//Remove item in cart 
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $key=>$value)
            {
              if($value["item_id"] == $_GET["id"])
              {
                unset($_SESSION["shopping_cart"][$key]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location="shop.php</script>';

              }
            }
      }
    }

?>
<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Reza Solide</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #B22222;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
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
      <li class="active"><a href="admin_panel.php">Products</a></li>
      <li><a href="insertitems.php">Insert Item</a></li>
      <li><a href="updateitems.php">Update Item</a></li>
      <li><a href="deleteitems.php">Delete Item</a></li>
      <li><a href="admin_login.php">Logout Account</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
  <div class="search-container">
    <form action="view_products.php" method="POST"><br>
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
     
    </form>
  </div>
</div>
      </ul>
  </div>
</nav>


<br><br><br>

   
                  <?php
                    $qury = "SELECT * FROM tbl_product ORDER BY id ASC";
                    $result = mysqli_query($connect,$qury);
                    if(mysqli_num_rows($result) >0)
                    {
                      while($row = mysqli_fetch_array($result))
                      {

                  ?>

                <div class="col-md-4">  
                     <form method="post" action="shop.php?action=add&id=<?php echo $row["id"];?>">  
                          <div style="border:1px solid #333; background: #DEB887; border-radius:5px; padding:16px;" align="center">  
                               <img src="image/<?php echo $row['image'];?>" class="img-responsive" style="width: 100px;" /><br />  
                               <h4 class="text-info"><?php echo $row['name'];?></h4>  
                               <h4 class="text-danger">PHP <?php echo $row['price'];?></h4>  
                            <input type="hidden" name="hidden_name" value="<?php echo $row['name'] ?>" />
                           <input type="hidden" name="hidden_image" value="<?php echo $row['image'];?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>">

                          </div>  
                     </form>  
                </div>  
                  <?php } } 
                  ?> 
           </div>  
           <br/>  
      </body>  
 </html>