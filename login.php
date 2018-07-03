<?php
$link = mysqli_connect("localhost", "root", "", "farmers");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 if( isset($_POST['btn_login'])) {
	 
	 $number=$_POST['number_login'];
	 $password=$_POST['password_login'];
	 
 if( $number==='' ||  $password===''){
			 
echo "Please Enter Mobile and Password";
}
 
 else{
 
 
	$query=mysqli_query($link,"SELECT * FROM register WHERE number='".$number."' AND password='".$password."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbnumber=$row['number'];  
    $dbpassword=$row['password'];  
    }  
  
    if($number == $dbnumber && $password == $dbpassword)  
    {  
   
  
    header("Location: index.php");  
    }  
    } else {  
    echo "Invalid mobile number or password!";  
    }  
 
	 
 }
 }


?>