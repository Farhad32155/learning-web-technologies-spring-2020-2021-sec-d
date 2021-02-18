<?php
	
	if(isset($_POST['submit'])){

		$male 		= $_POST['gender'];
		$female 		= $_POST['gender'];
		$other		= $_POST['gender'];
		

		if($male == "" || $female == "" || $other == "" ){
			echo "null submission...";
		}else{
			echo $male;
			echo $female;
			echo $other;
		}
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>GENDER Input</title>
</head>
<body>
	<form method="post" action="#">
	
		<fieldset>
				<legend><b>GENDER</b></legend>
					
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
			<input type="radio" name="gender" value="other"> Other <br>
			<input type="submit" name="submit" value="Submit">
						
						
			</fieldset>

	</form>
	
</body>
</html>