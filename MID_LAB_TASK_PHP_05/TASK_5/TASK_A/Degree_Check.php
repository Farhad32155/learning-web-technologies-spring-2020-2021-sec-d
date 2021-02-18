<?php

	
	if(isset($_POST['submit']))
	{

		$abc 		= $_POST['SSC'];
		$pqr 		= $_POST['HSC'];
		$mno 		= $_POST['BSc'];
		$str 		= $_POST['MSc'];
		

		if($abc == "" || $pqr == "" || $mno == "" || $str == "" )
		{
			echo "null submission...";
		}
		else
		{
			echo $SSC;
			echo $HSC;
			echo $BSc;
			echo $MSc;
		}



	}
	else
	{
		echo "invalid request...";
	}
?>