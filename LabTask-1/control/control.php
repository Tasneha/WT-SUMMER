<?php

$fnameError = "";
$lnameError = "";

if(isset($_POST["submission"]))
{
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $age = $_REQUEST["age"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];



if(empty($fname))
{
   $fnameError = "First name is required!" ."<br>";
}
else{
    $fnameError = "First name is " .$fname ."<br>";
}
if(empty($lname))
{
    echo "Last name is required!" ."<br>";
}
else{
    echo "Last name is " .$lname."<br>";
}
if(empty($email))
{
    echo "Email is required!" ."<br>";
}
else{
    echo "Email is " .$email ."<br>";
}

if(strlen($password) <8)
{
    echo "Password should be more than 8 characters" ."<br>";
}
else
{
    echo "Password is valid" ."<br>";
}



if(isset($_REQUEST["designation"]))
{
    $designation = $_REQUEST["designation"];
    echo "Your designation is " . $designation."<br>";
    
}
else
{
    echo "Select your designation." . "<br>";
}


if(isset($_REQUEST["JAVA"]) || isset($_REQUEST["PHP"]) || isset($_REQUEST["C++"])){
    if(isset($_REQUEST["JAVA"]) && isset($_REQUEST["PHP"])){
        echo "Your preferred language is " . $_REQUEST["JAVA"] . " and " . $_REQUEST["PHP"];
    }
    elseif(isset($_REQUEST["PHP"]) && isset($_REQUEST["C++"])){
        echo "Your preferred language is " . $_REQUEST["PHP"] . " and " . $_REQUEST["C++"];
    }
    elseif(isset($_REQUEST["JAVA"]) && isset($_REQUEST["C++"])){
        echo "Your preferred language is " . $_REQUEST["JAVA"] . " and " . $_REQUEST["C++"];
    }
    elseif(isset($_REQUEST["JAVA"])){
        echo "Your preferred language is " . $_REQUEST["JAVA"];
    }
    elseif(isset($_REQUEST["PHP"])){
        echo "Your preferred language is " . $_REQUEST["PHP"];
    }
    elseif(isset($_REQUEST["C++"])){
        echo "Your preferred language is " . $_REQUEST["C++"];
    }

}
else
{
    echo "Select your preferred language." . "<br>";
}
$formdata = array(
    'fname' =>$_POST['fname'],
    'lname' =>$_POST['lname'],
    'email' =>$_POST['email'],
    'password' =>$_POST['password']
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
else 
{
     echo "no data saved";
}
$data = file_get_contents("../Data/data.json");
$mydata = json_decode($data);


echo "my value: ".$mydata[1]->lname;
}

?>