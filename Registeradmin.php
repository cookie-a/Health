<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		<form method = "post" action = "" name="regadmin">
			<table width = "100%" height = "302" border = "0" >
				
				<tr>
					<td colspan = "4" ><?php  include_once('Patients.php'); ?></td>
				</tr>
				<tr>
					<td colspan = "4" align = "center" ><strong>Please fill in the details below</strong></td>
				</tr>
				
				<tr>
					<td width = "226">&nbsp;</td>
					<td width = "149">First name</td>
					<td width = "240">
						<input type = "text" name = "firstname" id = "firstname" placeholder = "Enter firstname" required/></td>
					<td width = "163" >&nbsp;</td>
				</tr>
				<tr>
					<td width = "226">&nbsp;</td>
					<td width = "149">Last name</td>
					<td width = "240">
						<input type = "text" name = "lastname" id = "lastname" placeholder = "Enter lastname" required/></td>
					<td width = "163" >&nbsp;</td>
				</tr>
				<tr>
					<td width = "226">&nbsp;</td>
					<td width = "149">Telephone</td>
					<td width = "240">
						<input type = "text" name = "tel" id = "tel" placeholder = "Enter telephone number" required/></td>
					<td width = "163" >&nbsp;</td>
				</tr>
				
				<tr>
					<td width = "226">&nbsp;</td>
					<td width = "149">Email</td>
					<td width = "240">
						<input type = "text" name = "email" id = "email" placeholder = "Enter email" required/></td>
					<td width = "163" >&nbsp;</td>
				</tr>

				<tr>
					<td width = "226">&nbsp;</td>
					<td width = "149">Section</td>
					<td width = "240">
						<input type = "text" name = "section" id = "section" placeholder = "Enter section" required/></td>
					<td width = "163" >&nbsp;</td>
				</tr>
				<tr>
					<td width = "226">&nbsp;</td>
					<td width = "149">Password</td>
					<td width = "240">
						<input type = "password" name = "password" id = "password" placeholder = "Enter admin password" required/></td>
					<td width = "163" >&nbsp;</td>
				</tr>
				<tr>
					<td width = "226">&nbsp;</td>
					<td>
						<input type = "submit" name = "save" value= "submit"/>
					</td>
					<td>
						<input type = "submit" name = "exit" value= "exit"/>
					</td>
					<td width = "226">&nbsp;</td>
				</tr>
				<tr>
					<td colspan = "4" align = "center" 
					style = "background-color: #FF0000; color:#FFA500;" >
					<?php include_once('Footerh.php'); ?></td>
				</tr>
			</table>

			<?php
			if (isset($_REQUEST{'save'})) 
			{
			$con=mysqli_connect("localhost","root","") or die("failed to connect to the server" .mysqli_error_());	
			mysqli_select_db($con,"ndejjeeve2019") or die ("failed to select database" .mysqli_error());
			$fname=$_POST['firstname'];
			$lname=$_POST['lastname'];
			$ftel=$_POST['tel'];
			$femail=$_POST['email'];
			$fpsw=$_POST['password'];
			$fps=md5($fpsw);
			$ins=mysqli_query($con,"INSERT INTO Fadmin(firstname,lastname,tel,email,password)VALUES('$fname','$lname','$ftel','$femail','$fps')") or die ("failed to insert data" .mysqli_error());
			if($ins)
			{

				echo "details of ".$lname." have been inserted";
			}
			
				# code...
			}
			

			?>
		</form>
	</body>
</html>