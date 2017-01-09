<!DOCTYPE html>
<html>
<head>
<title>login page</title>
<img src="top.jpg" longdesc="top.jpg">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<h1 align = center >Campaign Information System  </h1>
    <div align="center">
      <?php  if(isset($_SESSION['msg'])) {echo $_SESSION['msg'];unset($_SESSION['msg']);}?>
          </div>
<body>
	<div id="frm">
		<form action="process.php" method="POST">
					 <div align="center">
		    <table  cellpadding="5px" width="300px" >
		      <tr><td>Username</td></tr>
		      <tr><td><input type="text" name="username" placeholder="abc@example.com"></td></tr>
		      <tr><td>Password</td></tr>
		      <tr><td><input type="password" name="password" placeholder="Your Password"></td></tr>
		     <a href="temp.php>"><button type="submit" >Click</a></button></a>
		      <tr><td>Not Registered? <a href="signup.php">Create New Account</a></td></tr>
		      <tr><td>Forgot Password? <a href="#">Click Here</a></td></tr>
		      </table>
	      </div>
		</form>
	</div>
	<p align="base"center">@copyrights reserved</p>
</body>
</html>