<!DOCTYPE html>
	<html>
		<head>
			
		</head>
		<body>
			<div class = "navbar">
				<a href = "#">HOME</a>
				<div class = "dropdown">
					<button class = "dropbtn" >ADMINS</button>
					<div class = "dropdown-content">
						<a href = "Registeradmin.php" >Register admin</a>
						<a href = "editadmin.php" >Edit admin details</a>
					</div>
				</div>
				<div class = "dropdown">
					<button class = "dropbtn" >PATIENTS</button>
					<div class = "dropdown-content">
						<a href = "Register.php" >Register patients</a>
						<a href = "editstudents.php" >Edit patients</a>
					</div>
				</div>
				<div class = "dropdown">
					<button class = "dropbtn" >RECORDS</button>
					<div class = "dropdown-content" >
						<a href = "#" >View Records</a>
					</div>
				</div>
				<div class = "dropdown" >
					<button class = "dropbtn" >REPORTS</button>
					<div class = "dropdown-content" >
						<a href = "#" >Complaints</a>
					</div>
				</div>
			</div>
			<table>
			<form action="/action_page.php">
  <fieldset>
    <legend>Personal information:</legend>
    First name:
    <input type="text" name="firstname" value="">

    Last name:
    <input type="text" name="lastname" value=""><br><br>

  
        Age:
    <input type="text" name="age" value="">

     Sex:
    <select name="Sex">
  <option value="female">Female</option>
  <option value="male">Male</option>
  </select>

    Height:
    <input type="text" name="height" value=""><br><br>

    Occupation:
    <input type="text" name="occupation" value="">

    Education level:
    <select name="Education level">
  <option value="">Never went to school</option>
  <option value="1">Primary</option>
  <option value="2">O level</option>
  <option value="3">A level</option>
  <option value="4">Undergraduate</option>
  <option value="5">Postgraduate university</option>
  <option value="above 5">vocational school</option>
  <option value="above 5">Others</option>
  </select><br><br>

   Marital status:
    <select name="Martal status">
  <option value="single">Single</option>
  <option value="married">Married</option>
  <option value="divorced">Divorced</option>
  <option value="widowed">Widowed</option>
</select>

Number of pregnanacies:
   <select name="number of pregnancies">
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="above 5">Above 5</option>
  </select><br><br>

    Physical address:
    <input type="text" name="pysical address" value="">

    Household income:
    <select name="Household income">
  <option value="">0-100,0000 SHILLINGS</option>
  <option value="1">100,000-300,000 SHILLINGS</option>
  <option value="2">300,000-500,000 SHILLINGS</option>
  <option value="3">500,000-1,000,000 SHILLINGS</option>
  <option value="4">1,000,000-2,000,000 SHILLINGS</option>
  <option value="5">2,000,000-5,000,000 SHILLINGS</option>
  <option value="above 5">5,000,000-10,000,000 SHILLINGS</option>
  <option value="above 5">Above 10,000,000 SHILLINGS</option>
  </select><br><br>

   

    <fieldset>
    <legend>Routine Data</legend>
    <input type="submit" value="Submit">	
    </fieldset>
    
  </fieldset>
</form>

			<tr>
					<td colspan = "4" align = "center" 
					style = "background-color: #333; color:#fff;" >
					<?php include_once('Footerh.php'); ?></td>
				</tr>
			</table>
		</body>
	</html>
