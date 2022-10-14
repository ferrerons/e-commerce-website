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
       <li><a href="admin_panel.php">Products</a></li>
      <li><a href="insertitems.php">Insert Item</a></li>
      <li class="active"><a href="updateitems.php">Update Item</a></li>
      <li><a href="deleteitems.php">Delete Item</a></li>
      <li><a href="admin_login.php">Logout Account</a></li>
  </div>
</nav>
<html>
<head><title>Update Items</title>
</head>
<body>
<center><h2>Update Items</h2>
  <form action="updateitems.php" method="POST">
Search Product Name 
  <input type="text" id="myInput" placeholder="Search for items.." name="name">
  <input type="submit" value="Search">
  <input type="reset"></center>
</form>
</body>
</html>
