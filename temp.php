<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<link href="layout.css" rel="stylesheet" type="text/css" />
<link href="menu.css" rel="stylesheet" type="text/css" />
<title>text</title>
<style type="text/css">
<!--
.style1 {color: #333333}
.style2 {font-family: "Courier New", Courier, monospace}
-->
</style>
<head>
<title>Registration Form</title>
</head>
<body>
<div id="holder">
<div id="navbar">
<nav>
		<ul>
			<li><a href="P-DETAILS.php">P-DETAILS</a></li>
			<li><a href="#">C-MONEY</a></li>
			<li><a href="#">C-TIME</a></li>
			<li><a href="#">C-OTHERS</a></li>
		</ul>
		
</nav></div>
</nav></div>

<div id="content"> 
		<div id="pageheading">
		  <h1 class="style1">&nbsp;</h1>
		  <div id="div"></div>
		<div id="contentright"></div>
		<h1 style="text-align:center">Registration Form</h1><hr>
		<marquee behaviour = "Slide" direction = "left" scroll amounnt = "3" scroll delay = "500ms" onmouseover = "stop()" onmouseout = "start()">Hurry! For Registration</marquee>	
		<fieldset align="left">
		<tr><legend>Personal Info</legend>
			<table cellpadding="5px" cellspacing="5px" width="100%"> 
				<tr>
					<td><tr>
						<td>Name</td>
						<td>	<input type="text" name="name" size="20"/>	</td>
						<td>	<input	type = "file" name = "pic"	> </td>
					</tr>
				<tr>
					<td>Company's Name</td>
				  <td>	<input type="text" name="fname" size="20"/>
				    <input type="radio" name="goal of company" value="earn and serve " checked/></td>
				</tr><tr><td>&nbsp;</td>
				</tr>
				<tr>
					<td>Year Of Establishment</td>
					<td>
						<select name="year">
							<option>1990-1995</option>
							<option>1995-2000</option>
							<option>2000-2005</option>
							<option>2005-2016</option>
						</select>
					</td>
					</fieldset>
					<fieldset>
			<legend>Contact Info</legend>
			<table cellspacing="5px" cellpadding="5px" width="975">
				<tr>
					<td width="315">Mobile Number</td>
					<td><input type="text" name="mob" maxlength="10"/></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email"/></td>
				</tr>
				<tr>
					<td>Address</td>
				  <td width=623 > <div align="center">
				    <input name="text" type="text" size="50" placeholder="Address Line First"/>
			      </div></td>
				</tr>
				<tr>
					<td></td>
					<td> <input type="text" placeholder="Address Line Second"/></td>
				</tr>
				<tr>
					<td></td>
					<td> <input type="text" placeholder="Address Line Third"/></td>
				</tr>
				<tr>
					<td>City</td>
					<td>
						<select><td>
						<select>
							<option>Patna</option>
							<option>Jaipur</option>
						</select>					</td>
				</tr>
				<tr>
					<td>State</td>
					<td>
					<select><td>
						<select>
							<option>Bihar</option>
							<option>Rajasthan</option>
						</select>					</td>
					  					  
			          </td>
				</tr>
			</table>
		    <p>&nbsp;</p>
					</fieldset>
		<p>
			<input type="checkbox" /> I agree <a href="#">terms and condition</a><br>
			<input type="submit" value="Register"/>
			<input type="submit" value="Check"/>
			<input type="reset" value="Clear"/>
		</p>
	</body>
</html>
		
</div>
		
<div id="footer"></div>
</div>
</body>
</html>
