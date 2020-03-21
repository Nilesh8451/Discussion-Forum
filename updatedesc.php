<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "quest";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);

$a=$_SESSION['uid'];

$empinfo1 =$_GET['descri'];



$sql="INSERT INTO descri (uid,description) VALUES ($a ,'$empinfo1' )";

$result=mysqli_query($conn,$sql);

header("Location: profilepage.php");

?> 