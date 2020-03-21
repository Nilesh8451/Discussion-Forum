<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "quest";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);

$a=$_SESSION['uid'];

$empinfo1 =$_GET['position'];

$empinfo2 =$_GET['company'];

$empinfo3 =$_GET['startyear'];

$empinfo4 =$_GET['endyear'];
echo $a,"  ",$empinfo1," ",$empinfo2," ",$empinfo3," ",$empinfo4;

$sql="INSERT INTO empinfo (uid,position,company,startyear,endyear) VALUES
($a,'$empinfo1','$empinfo2',$empinfo3, $empinfo4)";

$result=mysqli_query($conn,$sql);


header("Location: profilepage.php");

?> 