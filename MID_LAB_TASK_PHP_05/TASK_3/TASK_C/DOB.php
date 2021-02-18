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
								<input type="text" name="day" value="<?php if(isset($_POST['day'])){ echo $_POST['day'];} ?>">/
							</td>
							<td>
								<input type="text" name="month" value="<?php if(isset($_POST['month'])){ echo $_POST['month'];} ?>">/
							</td>
							<td>
								<input type="text" name="year" value="<?php if(isset($_POST['year'])){ echo $_POST['year'];} ?>">/
							</td>
							
						</tr>

					</table>
					<hr width="50%" align="left">
					<input type="Submit" name="submit">
						
						
			</fieldset>



	</form>
	
</body>
</html>