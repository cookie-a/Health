<!DOCTYPE html>
	<html>
		<head>
    <table width = "100%" height = "14" border = "0" >
    <tr>
		 <td colspan = "6" ><?php  include_once('Patients.php'); ?></td>
        </tr>	
        </table>
		</head>
		<body>
			<table width = "100%" height = "14" border = "0">
         
			<form action="/action_page.php">
      <fieldset>
  <fieldset>
    <legend>Personal information:</legend>
    First name:
    <input type="text" name="firstname" value="">

    Middle name:
    <input type="text" name="Middle name" value="">

    Last name:
    <input type="text" name="lastname" value="">

    Registration number:
    <input type="text" name="firstname" value="">

    Date:
    <input type="text" name="firstname" value=""><br><br>

  
        Faculty:
    <input type="text" name="age" value="">

     Course:
    <input type="text" name="age" value="">


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

Contact number:
    <input type="text" name="lastname" value="">

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
 
  </fieldset>

  <fieldset>
    <legend>In case of emergency:</legend>

    Emergency name:
    <input type="text" name="lastname" value="">

    Emergency contact:
    <input type="text" name="lastname" value="">

    Relationship:
    <select name="Relationship">
  <option value="0">Mother</option>
  <option value="1">Father</option>
  <option value="2">Sister</option>
  <option value="3">Brother</option>
  <option value="4">Wife</option>
  <option value="5">Husband</option>
  <option value="above 5">Others</option>
  </select><br><br>

    </fieldset>

  <fieldset>
    <legend>Review:</legend>

    Taking any medications:
    <ul>
          <li>
            <label for="title_1">
              <input type="radio" id="title_1" name="title" value="M." >
              Yes
            </label>
          </li>
          <li>
            <label for="title_2">
              <input type="radio" id="title_2" name="title" value="Ms.">
              No
            </label>
          </li>
      </ul>

    If yes,please list:<br>
    <textarea id="1"
    rows="5"
    cols="80">Your text here</textarea>

    

    </fieldset><br>
    <tr>
          <td width = "226">&nbsp;</td>
          <td>
            <input type = "submit" name = "save" value= "submit"/>
          </td>  
        </tr>
  </fieldset>

  </fieldset>
</form>
<tr>
          <td colspan = "4" align = "center" 
          style = "background-color: #FF0000; color:#FFA500;" >
          <?php include_once('Footerh.php'); ?></td>
        </tr>

			
			</table>
		</body>
	</html>
