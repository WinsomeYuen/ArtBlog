<?php
	session_start();
	$user_name = strtolower($_POST['username']);
	$password = $_POST['password'];
	
	$fp = fopen("login.txt", "r");
	
	$file_content = file("login.txt"); //read into array now
				foreach ($file_content as $lines) {
					$lines = chop($lines);
					$field = preg_split( '/,,/', $lines);
					
					if($user_name == $field[0] && $password == $field[1]){
						$_SESSION['login'] = true;
						$_SESSION['user'] = $user_name;
					}
				}
	fclose($fp);
				
	if($_SESSION['login'] == true){
		header("Location: /wy301/blog/addentry.html");
	}
	else{
		 $_SESSION['error'] = "Invalid username or password";
		 header("Location: /wy301/blog/login.php");
	}
?>
