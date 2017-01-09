<?php session_start();?>
<html>
	<head>
		<title>Register New User</title>
		<style>
			span {
				color:red;
				display:block;
			}
		</style>
		</head>
	<body>
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
   	
		<h1>Create New User</h1>
		<form method="post" action="action/doRegister.php">
			<table cellpadding="5px">
				<tr>
					<td>Name</td>
					<td>
						<input type="text" name="name" placeholder="Your Name">
						<?php if(isset($errors) and isset($errors['name'])){echo '<span>'.$errors['name'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="email" name="email" placeholder="Your Email">
						<?php if(isset($errors) and isset($errors['email'])){echo '<span>'.$errors['email'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password" placeholder="Your Password">
						<?php if(isset($errors) and isset($errors['password'])){echo '<span>'.$errors['password'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>Mobile</td>
					<td>
						<input type = "text" name = "mobile" placeholder ="Your Mobile No.">
						<?php if(isset($errors) and isset($errors['mobile'])){echo '<span>'.$errors['mobile'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type= "radio" name= "gen" value="male">Male
						<input type="radio" name="gen" value="female">Female
						<?php if(isset($errors) and isset($errors['gen'])){echo '<span>'.$errors['gen'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>Dob</td>
					<td>
						<input type="date" name="dob" placeholder="Date of Birth">
						<?php if(isset($errors) and isset($errors['dob'])){echo '<span>'.$errors['dob'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>
						<select name="status">
							<option value="Active">Active</option>
							<option value="Inactive">Inactive</option>
							<option value="Delete">Delete</option>
						</select>
						<?php if(isset($errors) and isset($errors['status'])){echo '<span>'.$errors['status'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" name="sub" value="Register">
					</td>
				</tr>	
			</table>
		</form>
    
	</body>
</html>