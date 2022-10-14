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
      <li><a href="index.php">Home</a></li>
      <li><a href="shop.php">Shop</a></li>
      <li class="active"><a href="delete.php">Delete Account</a></li>
      <li><a href="update.php">Update Account</a></li>
      <li><a href="pay_offline.php">Pay Offline</a></li>
      <li><a href="login.php">Logout Account</a></li>
  </div>
</nav>
<center><form action="del_record.php" method="POST">
Delete Username: 
<input type="text" name="username"><br>
<input type="submit">
<input type="reset">
</form></center>
</body>
</html>