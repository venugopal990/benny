<?php

session_start();  
if(isset($_SESSION['user_name'])){
 echo "<center>"."<h1>"."WELCOME ".strtoupper($_SESSION['user_name'])."<h1>"."</center>";
 echo "<center>"."<a href='logout.php'><input type=button value=logout name=logout></a>"."</center>";
}
else{
	header("Location: login_register.php");  
}


?>