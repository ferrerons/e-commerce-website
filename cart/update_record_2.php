<?php
include ('connection.php');
  $fname=$_POST["firstname"];
  $lname=$_POST["lastname"];
  $uname=$_POST['username'];
  $pass=$_POST['password'];
  
  if (empty($fname) || empty($lname) || empty($pass)) {
    	
  ?>
  		<script type="text/javascript">
			alert("Fill up all the information needed!");
			window.location = "update_record.php";
		</script>

  <?php  	
  }
  else {

		$sql = "UPDATE tb_customer SET fname='$fname', lname='$lname' , pass = '$pass' WHERE uname = '$uname'";
		$conn->query($sql);

		?>
	      <script type="text/javascript">
				alert("Updated record successfully");
				window.location = "index.php";
		  </script>
		<?php

		$conn->close();
}

?>