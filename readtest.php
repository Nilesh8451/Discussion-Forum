 
  <?php
session_start();
$servername = "localhost";
$username = "root";
$dbname = "quest";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
$a=$_SESSION['uid'];
echo $a;
$interest=$_GET['name1'];
$sql = "INSERT INTO interest (id,programming,science,books,economics,movies,music,gaming,sports,food,travelling) 
VALUES ('$a','$interest[0]','$interest[2]','$interest[4]','$interest[6]','$interest[8]','$interest[10]','$interest[12]','$interest[14]','$interest[16]','$interest[18]')";

$conn->query($sql);
$interest=$_GET['name'];

$sql = "INSERT INTO a_o_s (id,programming,science,books,economics,movies,music,gaming,sports,food,travelling)
VALUES ('$a','$interest[0]','$interest[2]','$interest[4]','$interest[6]','$interest[8]','$interest[10]','$interest[12]','$interest[14]','$interest[16]','$interest[18]')";

 $conn->query($sql); 

$interest1=$_GET['text1'];


$interest2=$_GET['text2'];

$interest3=$_GET['text3'];

$interest4=$_GET['text4'];

$sql =  "INSERT INTO c_d (id,resident,college_name,course,year)
VALUES ('$a','$interest1','$interest2','$interest3','$interest4')";
 $conn->query($sql);


 header("Location: homepage.php");



?> 
 