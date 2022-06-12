<?php

$nameerr="";
if(isset($_POST["Submission"])){

$fname=$_REQUEST["fname"];
$lname=$_REQUEST["lname"];
$age=$_REQUEST["age"];
$des=$_REQUEST["designation"];
$email=$_REQUEST["Email"];
$password=$_REQUEST["pass"];

 $pl=$_REQUEST["P_Language"];
    
    if(empty($fname)||empty($lname)){
        $nameerr=" Please Enter your Fname ?";
        

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



        
        
        
        if(isset($_POST["P_Language"])){
            foreach($_REQUEST["P_Language"] as $pl){
            
            
            echo "Selected Prefered Language is = ".$pl;
        }
    }
        else {
            
            echo "Please enter at least one option.<br>";
        }

        
    //    if(isset($_REQUEST["java"])||isset($_REQUEST["php"])||isset($_REQUEST["c++"])){
    //        echo "Please select a checkbox!";
    //    }
        //2d-Array
       echo  $_FILES["myFile"]["name"];//[file][want to bring/attributes];

       //save file by changing names
       //way-1
    //    if(move_uploaded_file($_FILES["myFile"]["tmp_name"],"../uploads"."myFile.png"))

    //way-2
    //    if(move_uploaded_file($_FILES["myFile"]["tmp_name"],"../uploads/myFile.pdf"))

    //save original name
       if(move_uploaded_file($_FILES["myFile"]["tmp_name"],"../uploads/".$_FILES["myFile"]["name"]))
       {
           echo "File has been uploaded";

           
       }
       else{
           echo "File uploading error!<br>";

           //if error occured
           echo $_FILES["myFile"]["error"];
       }
    }

       //Get from data
       $formdata = array(
        'FirstName'=> $_POST["fname"],
        'LastName'=> $_POST["lname"],
        'Age'=>$_POST["age"],
        'Email'=>$_POST["Email"],
        'File'=>$_FILES["myFile"]["name"],
        'Designation'=>$_POST["designation"],
        'Preferred Language'=>$_POST["P_Language"]

        // 'Password'=>$_POST["pass"],
        // 'image'=> $_FILES["myFile"]["name"]
     );
     $existingdata = file_get_contents('../Data/data.json');
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     //Convert updated array to JSON
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
     
     //write json data into data.json file
     if(file_put_contents("../Data/data.json", $jsondata)) {
          echo "Data successfully saved <br>";
      }
     else {
          echo "no data saved";
     }
   $data = file_get_contents("../Data/data.json");
   $mydata = json_decode($data);

  

        
        
    
}
?>