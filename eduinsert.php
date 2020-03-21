<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "quest";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);

$a=$_SESSION['uid'];

$empinfo1 =$_GET['school'];

$empinfo2 =$_GET['concentration'];

$empinfo3 =$_GET['degreetype'];

$empinfo4 =$_GET['graduationyear'];
$sql="INSERT INTO education(uid,school,concentration, degreetype, graduationyear) VALUES
($a,'$empinfo1','$empinfo2','$empinfo3', $empinfo4)";

$result=mysqli_query($conn,$sql);

header("Location: profilepage.php");

?> 