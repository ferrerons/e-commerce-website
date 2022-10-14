<?php
include ('connection.php');

  $uname=$_POST["username"];
  $pass=$_POST['password'];

  if (empty($uname) || empty($pass)) {
    	
  ?>
  		<script type="text/javascript">
			alert("Username and Password is required");
			window.location = "login.php";
		</script>

  <?php
  }
  else {
		$sql = "SELECT * FROM tb_customer WHERE uname='$uname' AND pass='$pass'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$sql = "SELECT * FROM tb_customer WHERE uname='$uname' AND pass='$pass'";
			$conn->query($sql);
			?>
		      <script type="text/javascript">
					alert("Login successfully");
					window.location = "index.php";
			  </script>
			<?php
		} else {
			?>
		      <script type="text/javascript">
					alert("Incorrect Username or Password");
					window.location = "login.php";
			  </script>
			<?php
		}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
		$conn->close();
}
?>