<?php session_start();?>

<?xml version = "1.0" encoding = "utf-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
<title>Login Page</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Login to Winsome Yuen's Blog to begin blogging!</h1>
<form action="logincheck.php" method="post">

<div>
<div class="left"><label>Username:</label></div> 
<div class="right"><input type = "text" name="username" size="25" class="inputtext" value="" /></div>
</div>

<br/><br/>

<div>
<div class="left"><label>Password:</label></div>
<div class = "right"><input type = "password" name="password" size="20" maxlength="20" class="inputtext" value="" /></div>
</div>

<br/><br/>

<div>
<div class = "left"><label>.</label></div>
<div class = "right">
<input type ="submit" name="submit" value="Login"  class="button"/>
<a href="/wy301/blog/createlogin.html" class="button">Create Login</a></div>
</div>

</form>

<div id = "user">
	<?php if($_SESSION['login'] == true) { header("Location: /wy301/blog/addentry.html");}?>
</div>

<div id="error">
        <?php if(!empty($_SESSION['error'])) { echo "<p>" . $_SESSION['error'] . "</p>"; } ?>
</div>
<?php unset($_SESSION['error']); ?>

</body>
</html>