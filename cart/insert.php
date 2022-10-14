<?php
include ('connection.php');

$fname=test_input($_POST['firstname']);
$lname=test_input($_POST['lastname']);
$uname=test_input($_POST['username']);
$pass=test_input($_POST['password']);

// ADDING NEW ACCOUNT
 if (empty($fname) || empty($lname) || empty($pass) || empty($uname)) {
  	
    	
  ?>
  		<script type="text/javascript">
			alert("Fill up all the information needed!");
			window.location = "login.php";
		</script>

  <?php  	
  }
if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
?>
      <script type="text/javascript">
			alert("Only letters and white space allowed");
			window.location = "login.php";
	  </script>

<?php 
}

else {
	$sql = "INSERT INTO tb_customer (uname, fname, lname, pass)
	VALUES ('$uname', '$fname', '$lname', '$pass')";

	if ($conn->query($sql) === TRUE) {
	?>
		
	      <script type="text/javascript">
				alert("You've successfully created your account! :)");
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