<?php
	session_start() ;
	session_unset(); 
	session_destroy();
	header("Location: /wy301/blog/login.php");
?>