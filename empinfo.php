<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "quest";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
echo"Hello"
$a=$_SESSION['uid'];

$empinfo1 =$_GET['posi'];

$empinfo2 =$_GET['comp'];

$empinfo3 =$_GET['star'];

$empinfo4 =$_GET['end'];
$sql="INSERT INTO `empinfo` ( `uid`, `position`, `company`, `startyear`, `endyear`) VALUES
( '$a', '$empinfo1','$empinfo2','$empinfo3', '$empinfo4')";

$conn->query($sql);
header("Location: profilepage.php");

?> 