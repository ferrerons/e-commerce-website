<?php
include ('connection.php');

$uname=test_input($_POST['username']);

// IF ACCOUNT REGISTERED
 if (empty($_POST["username"])) {
  	
    	
  ?>
  		<script type="text/javascript">
			alert("Username is required");
			window.location = "login.php";
		</script>

  <?php  	
  }
if (!preg_match("/^[a-zA-Z]*$/",$uname)) {
?>
      <script type="text/javascript">
			alert("Only letters and white space allowed");
			window.location = "login.php";
	  </script>

<?php 
}

else {
		$uname=$_POST['username'];
		$sql = "SELECT * FROM tb_customer WHERE username = '$uname'";
		$result = $conn->query($sql);

	if ($conn->query($sql) === TRUE) {
	?>
		
	      <script type="text/javascript">
				alert("WELCOME! :)");
				window.location = "index.php";
		  </script>
	<?php
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$conn->close();
?>