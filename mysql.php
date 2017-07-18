<html>
<head>
	<title> MySQL_test.php </title>
</head>
 <body>
<?php

//Connect to MySQL

$host = "dbprojects.eecs.qmul.ac.uk" ;
$user = "wy301" ;
$pass = "pZESnwJYOoiRs" ;
$db = "wy301" ;
$link = mysql_connect ( $host , $user , $pass );
@mysql_select_db($db) or die( "Unable to select database");

// create a table:
$posts="create table blog (date integer primary key not null,title varchar(20),
body varchar(20))";
mysql_query($posts);

//add an entry
$t=time();
$text_title = $_POST['title'];
$text_body = $_POST['body'];
$posts = "INSERT INTO blog(date,title,body) VALUES ($t,$text_title,$text_body)";
mysql_query($posts);


//display a table
$posts="SELECT * FROM blog";
$result=mysql_query($posts);
$num=mysql_numrows($result);
echo "<p>There are $num entries in table blog</p><br/>";
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
$posts="DROP TABLE IF EXISTS blog";
$result=mysql_query($posts);
mysql_close ( $link );
?>
 </body>
</html>

