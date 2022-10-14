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
      
      <img src="logo/ecom-store-logo.png" alt="Reza Solide Logo" class="hidden-xs ">
      <img src="logo/ecom-store-logo-mobile.png" alt="Reza Solide Logo Mobile" class="visible-xs">
      
      </a>
    </div>
    <ul class="nav navbar-nav" style="font-family:sans-serif;">
       <li><a href="admin_panel.php">Products</a></li>
      <li class="active"><a href="insertitems.php">Insert Item</a></li>
      <li><a href="updateitems.php">Update Item</a></li>
      <li><a href="deleteitems.php">Delete Item</a></li>
      <li><a href="admin_login.php">Logout Account</a></li>

  </div>
</nav>
<?php
$msg="";

 if(isset($_POST['upload'])) {
  $target = "image/".basename($_FILES['image'] ['name']);
  $db=mysqli_connect("localhost","root","","test");

  $name=$_POST['name'];
  $price=$_POST['price'];
  $image=$_FILES['image']['name'];

  $sql="INSERT INTO tbl_product (name, image, price) VALUES ('$name' , '$image', '$price')";
  mysqli_query($db,$sql);

  if (move_uploaded_file($_FILES ['image']['tmp_name'], $target)) {
      $msg="Item uploaded successfully";

  }else {
      $msg="There was a problem!!";
  }

}
?>
<!DOCTYPE html>
<html>
<head>
<title>Insert Items</title>
<script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
<style type="text/css">
  
   form{
   	width: 20%;
   	margin: 50px auto;
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
   #wrapper{
 text-align:center;
 margin:0 auto;
 padding:0px;
 width:995px;
}
#output_image{
 max-width:300px;
}
    
</style>
</head>
<body>
<div id="wrapper" >
  <form method="POST" action="insertitems.php" enctype="multipart/form-data" >
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	 Insert Product Image: <input type="file" name="image" onchange="preview_image(event)" >
     <img id="output_image"/>
  	</div>
  	<div>
	 Name of Product :	<input type="text" name="name">
  	</div>
  	<div>
  		Price : <input type="text" name="price"></div>
  	<div>
  		<button type="submit" name="upload">Upload</button>
  	</div>
  </form>
</div>
</body>
</html