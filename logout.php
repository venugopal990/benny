<?php

session_start();  
if(isset($_SESSION['user_name'])){
	unset($_SESSION['user_name']);
session_destroy();
    header("Location: login_register.php");  
}
else{
	header("Location: login_register.php");  
}


?>