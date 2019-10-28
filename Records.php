<!DOCTYPE html>
	<html>
		<head>
    <table width = "100%" height = "14" border = "0">
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
    <legend>PATIENT EVALUATION:</legend>
    Patient name:
    <input type="text" name="firstname" value="">

    Date:
    <input type="text" name="Middle name" value="">

    Referral:
    <input type="text" name="lastname" value=""><br><br>

    Faculty:
    <input type="text" name="firstname" value="">

    Course:
    <input type="text" name="Middle name" value="">

    Times of visit:
    <input type="text" name="lastname" value=""><br><br>

    Accompanied by:
    <input type="text" name="lastname" value=""><br><br>

    CHIEF COMPLAINT:<br>
    <textarea id="1"
    rows="6"
    cols="80"></textarea>
    </fieldset>

    <fieldset>

    <legend>SYMPTOMS:</legend>
    
    Sleep:<br>
    <textarea id="1"
    rows="4"
    cols="40"></textarea>

    Interests:
    <textarea id="1"
    rows="4"
    cols="40"></textarea><br><br>

    
    Energy:<br>
    <textarea id="1"
    rows="4"
    cols="40"></textarea>

    Apetite:
    <textarea id="1"
    rows="4"
    cols="40"></textarea><br><br>

    Body changes:<br>
    <textarea id="1"
    rows="4"
    cols="40"></textarea><br>
  
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
					<td colspan = "6" align = "center" 
					style = "background-color: #FF0000; color: #FFA500;" >
					<?php include_once('Footerh.php'); ?></td>
				</tr>
			</table>
		</body>
	</html>
