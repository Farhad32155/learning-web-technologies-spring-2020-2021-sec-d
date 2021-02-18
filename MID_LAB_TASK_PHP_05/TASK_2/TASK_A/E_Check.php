<?php

	
	if(isset($_POST['submit']))
	{

		$email = $_POST['myemail'];
		

		if($email == "" ){
			echo "null submission...";
		}else{
			echo $email;
		}

	}
	else
	{
		echo "invalid request...";
	}
?>