<?php



$fname=$_POST["fname"];
$lname=$_POST["lname"];
$age=$_POST["age"];
$email=$_POST["Email"];
$password=$_POST["pass"];


if(is_numeric($fname) && is_numeric($lname)){
    echo "First name and Last Name is numeric <br>";
}
else{
    echo "Not Numeric Number<br>";
    
}

if(empty($email)){
    echo "Email field is empty<br>";
}
else{
    echo "Email field is not empty<br>";
}

if(strlen($password)<6){
    echo "Password must be more than 6 characters<br>";
}
else{
    echo "Password is valid<br>";
}



if(isset($_POST["radio"])){
    echo "you have selected".$_POST["radio"];
}
else{
  echo "Please select a designation.<br>";
}

if(isset($_POST["checkbox"])){
    echo "you have selected".$_POST["checkbox"];
}
else{
  echo "Please select ar least one Preferred Language.<br>";
}






?>