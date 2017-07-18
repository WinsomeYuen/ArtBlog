<?php

	$date = date('Y-m-d H:i:s');
	$title = $_POST['title'];
	$body = $_POST['body'];
	

	//Connect to MySQL
	$host = "dbprojects.eecs.qmul.ac.uk" ;
	$user = "wy301" ;
	$pass = "pZESnwJYOoiRs" ;
	$db = "wy301" ;
	$link = mysql_connect ( $host , $user , $pass );
	@mysql_select_db($db) or die( "Unable to select database");
	
	//add an entry
	$posts="INSERT INTO blog (date, title, body) VALUES ('$date','$title','$body')";
	mysql_query($posts);
		
	header("Location: /wy301/blog/viewBlog.php");
?>
