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
      <li class="active"><a href="admin_panel.php">Home</a></li>
      <li class="active"><a href="updateitem.php">Update Another Item</a></li>
    </ul>
  </div>
</nav>
<?php
include ('connection.php');

  if (empty($_POST["name"])) {
      
  ?>
      <script type="text/javascript">
      alert("Product name is required");
      window.location = "updateitem.php";
    </script>

  <?php   
  }else {
    $name = $_POST['name'];
    $sql = "SELECT * FROM tbl_product WHERE name = '$name'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
          
          if ($result->num_rows > 0) {
    ?>
<html>
<head><title>Updating Items</title>
</head>
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
  <div id="wrapper" >
  <form method="POST" action="updated.php" enctype="multipart/form-data">
         <input type="hidden" name="size" value="1000000">
    Product ID: <input type="text" value="<?php echo $row['id'];?>" disabled>
    <input type="hidden" name="id" value="<?php echo $row['id'];?>"><br>
    <div>Product Image:
      <br><input type="file" name="image" onchange="preview_image(event)" >  
     <img id="output_image" src="image/<?php echo $row['image'];?>">
    </div>
    <div>
     Update Name of Product :
     <input type="text" name="name" value="<?php echo $row['name'];?>">
    </div>
    <div>
     Update Price : 
     <input type="text" name="price" value="<?php echo $row['price'];?>">
   </div>
    <div>
      <input type="submit" value="update">
      <input type="reset">
    </div>
  </form>
</div></center>
<?php
    } else {
      ?>
          <script type="text/javascript">
          alert("No item found");
          window.location = "updateitem.php";
        </script>
      <?php
    }

    $conn->close();
}

?>