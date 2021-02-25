<!DOCTYPE HTML>
<html>
<head>

</head>
<body>

<?php
$conpassword="";
$nameErr = $passErr = "";
$name = $password =  "";
$nameErr = $emailErr = $dateofbirthErr = $genderErr = $degreeErr = $bloodgroupErr = "";
$name = $email = $dateofbirth = $gender = $degree = $bloodgroup = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
$nameErr = "Name is required";
} else {
$name = test_input($_POST["name"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z-'. ]*$/",$name)) {
$nameErr = "Only letters and white space allowed";
}
else if (strlen("name")<2)
{
echo"Contains at least two words";
}
}

if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else  { 
    if (strlen($_POST["name"])<2){
       $nameErr = "Type atleast two words";
     }
      if (!preg_match("/^[a-zA-Z-' _]*$/",$name)) {
        $nameErr = "Only letters and white space allowed";
      }
      else{ $name = test_input($_POST["name"]);}
  }

 
   

  if (empty($_POST["password"])) {
    $passErr = "Password is required";
  }
  else {
    if (strlen($_POST["password"])<8) {
      $passErr = "contain atleast eight characters";
    }
       if (!preg_match("/^[@, #, $,%]*$/",$password)) {
      $passErr = "Password must contain at least one of the special characters";
    }
    else{ $password = test_input($_POST["password"]);}
  }
  
  if ($password == $conpassword) {
	echo "Password matched Successfully";
}
else
{

	echo "Your password did not matched";
	
}

}
 





if (empty($_POST["email"])) {
$emailErr = "Email is required";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
}

if (empty($_POST["dateofbirth"])) {
$dateofbirthErr = "Date of Birth required";
} else if ($dateofbirth = date('d-m-Y', strtotime($_REQUEST['dateofbirth'])));
{echo $dateofbirth;
}



if (empty($_POST["gender"])) {
$genderErr = "Gender is required";
} else {
$gender = test_input($_POST["gender"]);
}




if(!empty($_POST['degree'])) {
if(count($_POST['degree'])<2){
$degreeErr = "Select at least two degrees";
}
else{
foreach($_POST['degree'] as $value){
$degree .= $value." ";
}
}
}


if (empty($_POST["bloodgroup"])) {
$bloodgroupErr = "Select a blood group";
} else {
$bloodgroup = test_input($_POST["bloodgroup"]);
}




function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>


<h2></h2>

<fieldset>
<legend>REGISTRATION</legend>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<span>* <?php echo $nameErr;?></span>
<br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<span>* <?php echo $emailErr;?></span>
<br><br>


   Username: <input type="text" name="name" value="<?php echo $name;?>">
  <span>* <?php echo $nameErr;?></span>
  <br><br>
  Password: <input type="Password" name="password" value="<?php echo $password;?>">
  <span>* <?php echo $passErr;?></span>
  <br><br>
  
   Confirm Password: <input type="Password" name="conpassword" value="<?php echo $password;?>">
  <span>* <?php echo $passErr;?></span>
  <br><br>

Date of Birth: <input type="date" name="dateofbirth" value="<?php echo date('d-m-Y')?>">
<span><?php echo $dateofbirthErr;?></span>
<br><br>
Gender:
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
<span>* <?php echo $genderErr;?></span>
<br><br>


<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</fieldset>
</form>



<?php
echo "";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $conpassword;
echo "<br>";
echo $name;
echo "<br>";
echo $dateofbirth;
echo "<br>";
echo $gender;
echo "<br>";



?>


</body>
</html>