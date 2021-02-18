<?php

	
	if(isset($_POST['submit']))
	{

		$Ap 		= $_POST['A+'];
		$An		    = $_POST['A-'];
		$Bp 		= $_POST['B+'];
		$Bn 		= $_POST['B-'];
		$ABp 		= $_POST['AB+'];
		$ABn		= $_POST['AB-'];
		$Op 		= $_POST['O+'];
		$On 		= $_POST['O-'];
		

		if($Ap == "" || $An == "" || $Bp == "" || $Bn == "" || $ABp == "" || $ABn == "" || $Op == "" || $On == "" )
		{
			echo "null submission...";
		}
		else
		{
			echo "$A+";
			echo "$A-";
			echo "$B+";
			echo "$B-";
			echo "$AB+";
			echo "$AB-";
			echo "$O+";
			echo "$O-";
		}



	}
	else
	{
		echo "invalid request...";
	}
?>