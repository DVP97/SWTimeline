<?php
require('db.php');
$con->set_charset('utf8');
session_start();

//get user ID
$user=$_SESSION['username'];
$sel_query2="SELECT IDuser FROM  users WHERE username='$user';";

$userID = mysqli_query($con,$sel_query2) or die ( mysqli_error());
$row= mysqli_fetch_assoc($userID);
$asdf = $row['IDuser'];

$qwerty = $_GET["actual"];
$query = "INSERT INTO users_Contenido (ID_Contenido,ID_user) VALUES ($qwerty, $asdf);";
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: contenido.php?actual=$qwerty"); 
?>