<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "quest";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);

$a=$_SESSION['uid'];

$empinfo1 =$_GET['location'];

$empinfo2 =$_GET['startyearl'];

$empinfo3 =$_GET['endyearl'];

$sql="INSERT INTO location(uid,location, startyear,endyear) VALUES
($a,'$empinfo1','$empinfo2','$empinfo3')";

$result=mysqli_query($conn,$sql);

header("Location: profilepage.php");

?> 