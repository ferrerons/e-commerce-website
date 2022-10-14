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
      <li><a href="updateitems.php">Update Item</a></li>
      <li class="active"><a href="deleteitems.php">Delete Item</a></li>
      <li><a href="admin_login.php">Logout Account</a></li>
  </div>
</nav>
<?php

include ('connection.php');

if  (isset($_POST['upload'])) {
		$name=$_POST['name'];
		$sql = "SELECT * FROM tbl_product WHERE name = '$name'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$sql = "DELETE FROM tbl_product WHERE name = '$name'";
			$conn->query($sql);
			?>
		      <script type="text/javascript">
					alert("Deleted record successfully");
					window.location = "admin_panel.php";
			  </script>
			<?php
		} else {
			?>
		      <script type="text/javascript">
					alert("No record to be deleted");
					window.location = "deleteitems.php";
			  </script>
			<?php 	
  }
		$conn->close();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Items</title>
	<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 20px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   
</style>
</head>
<body>
	<div id = content>
	<form action="deleteitems.php" method="POST">
	<div>
	 Name of Product :	<input type="text" name="name">
  	</div>
  	<div>
  		<button type="submit" name="upload">Remove Item</button>
  	</div>
	</form>

</body>
</html>