<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>English NEWSPAPER</title>
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
   	
		<h1>English Newspaper</h1>
		<form method="post" action="check1.php">
			<table cellpadding="5px">
			<tr>
					<td>Status</td>
					<td>
						<select name="status">
							<option value="Times Of India">Times Of India</option>
							<option value="The Hindu">The Hindu</option>
							<option value="The Telegraph">The Telegraph</option>
						</select>
						<?php if(isset($errors) and isset($errors['status'])){echo '<span>'.$errors['status'].'</span>';}?>
					</td>
					</tr>
					<tr>
					<td>article size</td>
					<td>
						<input type="text" name="size" placeholder="length*breadth">
						<?php if(isset($errors) and isset($errors['size'])){echo '<span>'.$errors['size'].'</span>';}?>
					</td>
				</tr>
				<tr>
					<td>number of days taken by the article</td>
					<td>
						<input type="text" name="days" placeholder="no. of days">
						<?php if(isset($errors) and isset($errors['days'])){echo '<span>'.$errors['days'].'</span>';}?>
					</td>
				</tr>
		<tr>
					<td>cost through this campaign is:</td>
					<td>
						<input type="text" name="cost" placeholder="size*days">
						<?php if(isset($errors) and isset($errors['cost'])){echo '<span>'.$errors['cost'].'</span>';}?>
					</td>
				</tr>

<body>
</body>
</html>