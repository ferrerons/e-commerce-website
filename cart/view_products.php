 <html>
<head>  
           <title>Reza Solide</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
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
      </ul>
  </div>
</nav>
<?php
  session_start();
$conn = mysqli_connect('localhost','root','','test');

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
                      'item_size' =>   $_POST["size"],
                      'item_quantity' =>   $_POST["quantity"]

            );
            $_SESSION["shopping_cart"][$count] = $item_array;
    	}
	}
}
?>
<?php
$search=$_POST['search'];
$sql="SELECT * FROM tbl_product WHERE name LIKE '%$search%'";
$result = $conn->query($sql);
if(mysqli_num_rows($result) >0){
   while($row = mysqli_fetch_array($result))
     {
	?>
<div class="col-md-4">
  <form method="post" action="shop.php?action=add&id=<?php echo $row["id"];?>">
	<div style="border:1px solid #333; background:#DEB887; border-radius:5px; padding:16px;" align="center"> 
	<img src="image/<?php echo $row['image'];?>" class="img-responsive" style="width: 100px;" /><br />  
    <h4 class="text-info"><?php echo $row['name'];?></h4>  
    <h4 class="text-danger">PHP <?php echo $row['price'];?></h4>  
    <input type="hidden" name="hidden_name" value="<?php echo $row['name'] ?>" />
    <input type="hidden" name="hidden_image" value="<?php echo $row['image'];?>"/>
    <input type="hidden" name="hidden_price" value="<?php echo $row['price'];?>"/> 
 </div> 
</div>
<?php } }
		
$conn->close();
?>
</body>
</html>