<?php
include "connection.php";
	$username=$_POST["username1"];
	$password=$_POST['password1'];
	  if (empty($username) || empty($password)) {
    	
  ?>
  		<script type="text/javascript">
			alert("Username and Password is required");
			window.location = "admin.php";
		</script>

  <?php
  }
  else {
		$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$sql = "SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
			$conn->query($sql);
			?>
		      <script type="text/javascript">
					alert("Login successfully");
					window.location = "admin_panel.php";
			  </script>
			<?php
		} else {
			?>
		      <script type="text/javascript">
					alert("incorrect username or password");
					window.location = "admin.php";
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