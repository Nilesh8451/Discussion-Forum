<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "quest";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);

$a=$_SESSION['uid'];

$empinfo1 =$_GET['changes'];

$sql="UPDATE userlogin SET username = '$empinfo1' WHERE ID = '$a'";

$result=mysqli_query($conn,$sql);

$_SESSION['username']=$empinfo1;
header("Location: profilepage.php");

?> 