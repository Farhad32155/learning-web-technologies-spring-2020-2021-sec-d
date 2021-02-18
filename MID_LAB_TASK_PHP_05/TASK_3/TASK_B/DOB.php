<?php
	
	if(isset($_POST['submit'])){

		$day 		= $_POST['day'];
		$month 		= $_POST['month'];
		$year 		= $_POST['year'];
		

		if($day == "" || $month == "" || $year == "" ){
			echo "null submission...";
		}else{
			echo $day;
			echo $month;
			echo $year;
		}
	}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>DOB Input</title>
</head>
<body>
	<form method="post" action="#">
	
		<fieldset>
				<legend><b>Date Of Birth</b></legend>
					<table>
						<tr>
							<td>
								<i>dd</i>
							</td>
							<td>
								<i>mm</i>
							</td>
							<td>
								<i>yy</i>
							</td>
						</tr>

						<tr>
							<td>
								<input type="text" name="day" value="">/
							</td>
							<td>
								<input type="text" name="month" value="">/
							</td>
							<td>
								<input type="text" name="year" value="">/
							</td>
							
						</tr>

					</table>
					<hr width="50%" align="left">
					<input type="Submit" name="submit">
						
						
			</fieldset>

	</form>
	
</body>
</html>