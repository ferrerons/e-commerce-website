<?php
include ('connection.php');
$target = "image/".basename($_FILES['image'] ['name']);
$prod = $_POST['id'];
$image=$_FILES["image"]["name"];
$name=$_POST["name"];
$price=$_POST["price"];
  
  
  if (empty($name) || (empty($price))) {
    	
  ?>
  		<script type="text/javascript">
			alert("Fill up all the information needed!");
			window.location = "updateitems.php";
		</script>

  <?php  	
  }
  else {
		$sql = "UPDATE tbl_product SET image='$image',name='$name', price='$price' WHERE id = '$prod'";
		$conn->query($sql);
		move_uploaded_file($_FILES ['image']['tmp_name'], $target)
		?>
	      <script type="text/javascript">
				alert("Updated record successfully");
				window.location = "updateitem.PHP";
		  </script>
		<?php

		$conn->close();
}

?>