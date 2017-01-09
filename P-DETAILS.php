<?php session_start();?>
<html>
	<head>
		<title>P-DETAILS</title>
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
		?><h1>Details Of The Campaign</h1>
		<form method="post" action="check.php">
			<table cellpadding="5px">
				<tr>
					<td>Product Name</td>
					<td>
						<input type="text" name="name" placeholder="Product Name">
						<?php if(isset($errors) and isset($errors['name'])){echo '<span>'.$errors['name'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>Brand Of The Product</td>
					<td>
						<input type="text" name="Brand" placeholder="Brand">
						<?php if(isset($errors) and isset($errors['Brand'])){echo '<span>'.$errors['Brand'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>Use Of Product</td>
					<td>
						<input type="text" name=use" placeholder="Use Of The Product">
						<?php if(isset($errors) and isset($errors['use'])){echo '<span>'.$errors['use'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>License Id Of Product</td>
					<td>
						<input type = "text" name = "license" placeholder ="License No.">
						<?php if(isset($errors) and isset($errors['license'])){echo '<span>'.$errors['license'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>TYPE OF CAMPAIGN</td>
					<td>
						<input type= "radio" name= "type" value="newspaper"><a href="newspaper.php">Newspaper</a><br/>
						<input type="radio" name="type" value="television"><a href="newspaper.php">Television</a><br/>
						<input type="radio" name="type" value="signboard"><a href="newspaper.php">Signboard</a><br/>
						<?php if(isset($errors) and isset($errors['type'])){echo '<span>'.$errors['type'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>Status</td>
					<td>
						<select name="status">
							<option value="Time">Time</option>
							<option value="Money">Money</option>
							<option value="Others">Others</option>
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
		
   	