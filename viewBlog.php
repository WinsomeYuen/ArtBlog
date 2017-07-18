<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
<title>Home Page</title>
	<link rel="stylesheet" href="style.css">
	<script type = "text/javascript">
	<!--
		function closeWindow(){
			var question = confirm("Are you sure you want to leave blog?");
			if (! question){
				return false;
			} else {
				window.location = "clear.php";
			}
	//-->
		}
	</script>
</head>

<body>
<!--Banner Note: #caa2cc is color banner BG-->
<div id="header">
	<img src="images/banner.jpg" class="center fit" style="width:100%">
	<br/>
</div>
<!--Website Body-->
	<div class ="container">
		<div class="entries">
			<!--Static Date-->
			<p id="demo" class="demo"></p>
			<script>
			document.getElementById("demo").innerHTML = Date();
			</script>
			<div class ="feed">
			<?php
				//Connect to MySQL

				$host = "dbprojects.eecs.qmul.ac.uk" ;
				$user = "wy301" ;
				$pass = "pZESnwJYOoiRs" ;
				$db = "wy301" ;
				$link = mysql_connect ( $host , $user , $pass );
				@mysql_select_db($db) or die( "Unable to select database");
				
				//display a table
				$posts="SELECT * FROM blog";
				$result=mysql_query($posts);
				$num=mysql_numrows($result);
				if ($num==0) {
					echo "<br/><p>The database contains no entries yet</p><br/>";
				} else { 
				$i=0;
					while ($i < $num) {
						$date=mysql_result($result,$i,"date");
						$title=mysql_result($result,$i,"title");
						$body=mysql_result($result,$i,"body");
						echo "Date: $date<br/><h2>$title</h2><br/>$body<br/><hr><br/>";
						$i++;
					}
				}
				//$query="DROP TABLE IF EXISTS blog";
				//$result=mysql_query($query);
			?>
			</div>
		</div>
		<div class="navbar"><ul>
			<li><a href="viewBlog.php">Home</a></li>
			<li><a href="login.php">Add Entry</a></li>
			<li><a href='logout.php'>Logout</a></li><br>
			<li><input type="button" id="exit" value="Exit"/></li>
		</ul>
		</div>
	</div> 
	
	<script type = "text/javascript">
	// Set reset button to the event handler !-->
	document.getElementById("exit").onclick = closeWindow;
	//-->
	</script>
	
</body>