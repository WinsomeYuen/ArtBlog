<?php	
	// Select 1 from table_name will return false if the table does not exist.
	$val = mysql_query('select 1 from `blog` LIMIT 1');
	
	if ($val !== FALSE) {
		header("Location: /wy301/blog/viewBlog.php");
		exit;
	} else{
		//Connect to MySQL
		$host = "dbprojects.eecs.qmul.ac.uk" ;
		$user = "wy301" ;
		$pass = "pZESnwJYOoiRs" ;
		$db = "wy301" ;
		$link = mysql_connect ( $host , $user , $pass );
		@mysql_select_db($db) or die( "Unable to select database");
		
		//create a table:
		$posts="create table blog (date TIMESTAMP,title VARCHAR(30),body VARCHAR(255))";
		mysql_query($posts);
		
		$posts = "create table login(username VARCHAR(30), password VARCHAR(30))";
		
		header("Location: /wy301/blog/login.php");
	}