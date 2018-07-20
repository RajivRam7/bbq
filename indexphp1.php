<?php
$servername="localhost";
$username="root";
$password="";
$dbname="bbqlogin";

$uname=$_POST["Firstname"];
$pwd=$_POST["Password"];
//conection
$conn= mysqli_connect($servername,$username,$password,$dbname);
//check connection
if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
 }
 $sql="INSERT INTO bbqlogin VALUES ('$Firstname','$Password')";
 if(mysqli_query($conn,$sql))
 {
 	echo "new record created sucessfully";
 } else {
 	echo "Error: " . $sql."<br>". mysqli_error($conn);
 }

 mysqli_close($conn);
/*
?> 
