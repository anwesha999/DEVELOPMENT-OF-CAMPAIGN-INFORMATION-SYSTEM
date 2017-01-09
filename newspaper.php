<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>NEWSPAPER</title>
</head>
<?php 
			if(isset($_SESSION['errors'])) {
				$errors = $_SESSION['errors'];
				/*echo '<ul>';
					foreach($errors as $error) {
						echo '<li>'.$error.'</li>';
					}
				echo '</ul>';
				*/
				unset($_SESSION['errors']);
			}
		?>
   	
		<h1>CAMPAIGN THROUGH NEWSPAPER</h1>
		<form method="post" action="check1.php">
			<table cellpadding="5px">
				<tr><input type= "radio" name= "type" value="English"><a href="statuseng.php">English</a><br/>
						<input type="radio" name="type" value="Hindi"><a href="statushindi.php">Hindi</a><br/>
						<input type="radio" name="type" value="Regional"><a href="statusreg.php">Regional</a><br/>
						<?php if(isset($errors) and isset($errors['type'])){echo '<span>'.$errors['type'].'</span>';}?>
					</td>
				</tr>
				

<body>
</body>
</html>
