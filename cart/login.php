<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/design.css" rel="stylesheet" type="text/css">
<title>Reza Solide Login</title>
</head>
<body>
	<div class="container">
		<div id="login">
		  <form action="logined.php" method="POST">
			    Username
			    <input type="text" name="username" placeholder="Enter Username" required>
			    Password <br>
			    <input type="password"name="password" placeholder="Enter Password" required>
		    <div><a href="update.php">
		    Forgot Password?</a>
			</div>
			  <p><input type="Submit"></p>
		  </form>
		  <p> Don't have account? <a href="add.php">Register</a> here.</p>
        </div>
	</div>
</body>
</html>