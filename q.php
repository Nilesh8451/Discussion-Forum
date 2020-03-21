<?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "quest";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
$c1 =$_GET['cat'];


$qs =$_GET['ques'];

$ps =$_GET['post'];
if($ps=='group')
{
	$sql="select * from c_d where id=$_SESSION[uid]";
     $result=mysqli_query($conn,$sql);
     $row= mysqli_fetch_assoc($result);
	 $cd=$row['college_name'];
}
else
{
	$cd='open';
}
$a=$_SESSION['username'];

$sql="INSERT INTO `questions` ( `ques`, `category`, `views`, `time`, `author`, `area`) VALUES
( '$qs', '$c1', 0, NOW(), '$a','$cd')";
$conn->query($sql);
 header("Location: homepage.php");
?>