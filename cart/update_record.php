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
      <li><a href="delete.php">Delete Account</a></li>
      <li class="active"><a href="update.php">Update Account</a></li>
      <li><a href="pay_offline.php">Pay Offline</a></li>
      <li><a href="login.php">Logout Account</a></li>
    </ul>
  </div>
</nav>
<?php
include ('connection.php');

  if (empty($_POST["username"])) {
    	
  ?>
  		<script type="text/javascript">
			alert("Username is required");
			window.location = "update.php";
		</script>

  <?php  	
  }
  else {

		$uname=$_POST['username'];
		$sql = "SELECT * FROM tb_customer WHERE uname = '$uname'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if ($result->num_rows > 0) {
		?>
			<center><form action="update_record_2.php" method="POST">
				Username: <input type="text" value="<?php echo $row['uname'];?>" disabled>
				<input type="hidden" name="username" value="<?php echo $row['uname'];?>"><br>
				First Name: <input type="text" name="firstname" value="<?php echo $row['fname']; ?>"><br>
				Last Name: <input type="text" name="lastname" value="<?php echo $row['lname']; ?>"><br>
				Password: <input type="text" name="password" value="<?php echo $row['pass']; ?>"><br>
				<input type="submit" value="Update Record">
			</form></center>
		<?php
		} else {
			?>
		      <script type="text/javascript">
					alert("No record found");
					window.location = "update.php";
			  </script>
			<?php
		}

		$conn->close();
}

?>