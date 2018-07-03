<?php
$link = mysqli_connect("localhost", "root", "", "farmers");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


 if( $_SERVER['REQUEST_METHOD']=='POST') {
	 
	 
	 $name=$_POST['name'];
	 $number=$_POST['number'];
	 $place=$_POST['place'];
	 $password=$_POST['password'];
	
 if($name=='' || $number=='' || $place=='' || $password==''){
	 
	echo "Please Enter All Required Fields";
 }
 
 
 // User is exist or not
 $query = "SELECT * FROM `register` WHERE `number` = '$number'";
$sqlsearch = mysqli_query($link,$query);
$resultcount = mysqli_num_rows($sqlsearch);

 if($resultcount>0){
	 echo "Your Mobile is Already Registered ";
 }
 else{
 
 $query = "INSERT INTO `register` (name, number,place,password) VALUES ('$name','$number','$place','$password')";
			if (mysqli_query($link, $query)) {
                echo"Register Successfully"; 
			
                } 
				else{
				echo"Try After Some Time";
				}
				
 
 }
 
 
 
 }


?>
