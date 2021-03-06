<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>

<!--textStyle CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
<link rel="stylesheet" href="css/textStyle.css">
<link rel="stylesheet" href="css/timeline_custom_style.css">
<!--Tab icon-->
<link rel="icon" type="image/png" href="media/Fulcrum.png">
<link rel="stylesheet" href="css/style.css" />
</head>
<body  background="media/background.jpg">
<div class="container">
	<nav class="navbar navbar-expand-sm navbar-dark">
    	<a class="navbar-brand" href="index.php"><img src="media/Fulcrum.png" alt="icon" height="50">Star Wars Saga Timeline</a>
    </nav>
<?php
require('db.php');
session_start();
if(isset($_SESSION['username'])){
	header("Location: index.php");
}
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	//Checking is user existing in the database or not
    $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
		
	    $_SESSION['username'] = $username;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<center>
<div class="form">
	<h1 class="title" style="color:#FFE81F">log in</h1>
	<form action="" method="post" name="login">
		<input class="forma" type="text" name="username" placeholder="Username" required /><br>
		<input class="forma" type="password" name="password" placeholder="Password" required /><br>
		<input class="forma" name="submit" type="submit" value="Login" />
	</form>
	<p>¿Aún no tienes cuenta de SW Timeline? <a href='register.php'>Regístrate aquí</a></p>
</div>
<?php } ?>
</center>
</body>
</html>