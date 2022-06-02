<?php



$fname=$_POST["fname"];
$lname=$_POST["lname"];
$age=$_POST["age"];
$des=$_POST["designation"];
$email=$_POST["Email"];
$password=$_POST["pass"];
$pl=$_POST["P_Language"];

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

if(isset($des)){
    echo "Designation is = ".$des;
    echo "<br>";
}
else{
    echo "Please select a Destination<br>";
}



if(isset($pl)){
    echo "Preferred Language is = ".$pl;
}
else {
    echo "Please enter at least one option.<br>";
}






?>