<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="./css/style1.css" rel="stylesheet" type="text/css">
<title>Admin Login</title>
<link href="./css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
</head>
<body background="hehe.jpg">
	<div class="headerMenu">
		<div id="wrapper">
		  <form action="admin_login.php" method="POST">
			  <div class="form-group">
			    <label for="InputEmail1">
			    Username <br>
			    <input type="text" class="form-control" id="InputEmail1" name="username1" placeholder="Enter Username" required>
			  </div>
			  <div class="form-group">
			    <label for="InputPassword1">
			    Password <br>
			    <input type="password" class="form-control" id="InputPassword1" name="password1" placeholder="Enter Password" required>
		    </div>
		    <div class="login-forgot"><a href="update.php">
		    Forgot Password?</a></div>
			  <div class="form-check">
			    <input type="checkbox" class="form-check-input" id="Check1">
			    <label class="form-check-label" for="Check1">Check me out</label>
		    </div>
			  <button type="submit">Submit</button>
			  <button type="reset">Reset</button>
		  </form>
        </div>
	</div>
	<div class="or-line">
		<div id="vertical-line1">
			<label></label>
		</div>
		<div id="or-separate">
			<label>or</label>
		</div>
		<div id="vertical-line2">
			<label></label>
		</div>
	</div>
	<div class="login-other">
		<span>Don't have account? 
		<a href="add.php">Register</a> here.
		</span>
	</div>
</body>
</html>