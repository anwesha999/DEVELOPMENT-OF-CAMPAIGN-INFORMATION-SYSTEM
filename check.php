<?php session_start(); 
	if(isset($_POST['sub'])) {
		$name = $_POST['name'];
		$Brand = $_POST['Brand'];
		$use=  $_POST['use'];
		$type = isset($_POST['type']) ? $_POST['type']:'';
		$license = $_POST['license'];
				$status = $_POST['status'];
		
		$errors = [];
		if(empty($name)) {
			$errors['name'] = 'Please fill the name';
		}else {
			$length = strlen($name);
			if(!($length >=3 && $length<=60)) {
				$errors['name'] = 'Please fill the name between 3 to 60 chars.';
			}
		}
		
		if(empty($Brand)) {
			$errors['Brand'] = 'Please fill the Brand';
		}
		
		if(empty($use)) {
			$errors['use'] = 'Please fill the use';
		}
		
		if(empty($license)) {
			$errors['license'] = 'Please fill the license';
		}
		
		if(empty($type)) {
			$errors['type'] = 'Please fill the ';
		}
		
		if(empty($status)) {
			$errors['status`'] = 'Please fill the status';
		}
		
		if(!empty($errors)) {
			$_SESSION['errors'] = $errors;
			header("Location:../signup.php");
			die;
		}
		
		$link = @mysqli_connect('localhost','root','','login');
		
		if(!$link) {
			die('Connection Error '.mysqli_connect_errno().'-'.mysqli_connect_error());
		}
		
		$query = "insert into ldata (name,email,password,gender,mobile,dob,status) value('".
		$name."','".$email."','".$password."','".$gender."','".$mobile."','".$dob."','".$status."')";
		
		$result = mysqli_query($link,$query);
		
		if($result) {
			$_SESSION['msg'] = '<p><b>Congratulations!!!</b> You have successfully registered with us.</p>';
		}else {
			$_SESSION['msg'] = '<p><b>Sorry!!!</b> Some problem occured. Please <a href="../signup.php">Try again</a></p>';
		}
	}
	header("Location:../signup-status.php");
?>