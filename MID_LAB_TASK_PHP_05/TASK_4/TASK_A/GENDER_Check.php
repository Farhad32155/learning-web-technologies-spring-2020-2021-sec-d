<?php

	
	if(isset($_POST['submit']))
	{

		$male 		= $_POST['male'];
		$female 		= $_POST['female'];
		$other 		= $_POST['other'];
		

		if($male == "" || $female == "" || $other == "" )
		{
			echo "null submission...";
		}
		else
		{
			echo $male;
			echo $female;
			echo $other;
		}



	}
	else
	{
		echo "invalid request...";
	}
?>