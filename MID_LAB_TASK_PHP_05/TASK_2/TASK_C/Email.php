<!DOCTYPE html>
<html>
<head>
	<title>Email Input</title>
</head>
<body>
	<form method="post" action="#">
	
		<fieldset>
			<legend>Email</legend>
			Email: <input type="text" name="myemail" value="<?php if(isset($_POST['myemail'])){ echo $_POST['myemail'];} ?>"> <br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
		
	</form>
	
</body>
</html>