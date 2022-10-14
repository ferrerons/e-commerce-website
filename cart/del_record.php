<?php
include ('connection.php');

  if (empty($_POST["username"])) {
    	
  ?>
  		<script type="text/javascript">
			alert("Username is required");
			window.location = "delete.php";
		</script>

  <?php  	
  }
  else {

		$uname=$_POST['username'];
		$sql = "SELECT * FROM tb_customer WHERE uname = '$uname'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$sql = "DELETE FROM tb_customer WHERE uname = '$uname'";
			$conn->query($sql);
			?>
		      <script type="text/javascript">
					alert("Deleted record successfully");
					window.location = "login.php";
			  </script>
			<?php
		} else {
			?>
		      <script type="text/javascript">
					alert("No record to be deleted");
					window.location = "del_record.php";
			  </script>
			<?php
		}

		$conn->close();
}

?>