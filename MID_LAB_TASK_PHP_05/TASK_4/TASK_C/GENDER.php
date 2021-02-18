<!DOCTYPE html>
<html>
<head>
	<title>GENDER Input</title>
</head>
<body>
	<form method="post" action="#">
	
		<fieldset>
				<legend><b>GENDER</b></legend>
					
			<input type="radio" name="gender" value="male"> Male <?php if(isset($_POST['male'])){ echo $_POST['male'];} ?>
			<input type="radio" name="gender" value="female"> Female <?php if(isset($_POST['female'])){ echo $_POST['female'];} ?>
			<input type="radio" name="gender" value="other"> Other <?php if(isset($_POST['other'])){ echo $_POST['other'];} ?><br>
			<input type="submit" name="submit" value="Submit">
						
						
			</fieldset>

	</form>
	
</body>
</html>