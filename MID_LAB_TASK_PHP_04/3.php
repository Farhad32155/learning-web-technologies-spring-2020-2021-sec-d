<?php 
 
function check($number){ 
    if($number % 2 == 0){ 
        echo "The number is Even";  
    } 
    else{ 
        echo "The number is Odd"; 
    } 
} 
 
$number = 100; 
check($number) 
?> 