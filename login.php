<?php
 include 'db_connection.php';

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
	$dbname=$row['name'];

    }  
  
    if($number == $dbnumber && $password == $dbpassword)  
    {  
    session_start();  
	$_SESSION['user_name']=$dbname; 
  
    header("Location: home.php");  
    }  
    } else {  
    echo "Invalid mobile number or password!";  
    }  
 
	 
 }
 }


?>