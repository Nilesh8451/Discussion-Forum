
<?php
include 'config.php';
if (isset($_POST['suggest'])){
   
    $name=$_POST['suggest'];
    if(!empty($name))
    {
    $sql="Select * from questions where ques like '%$name%'" ;
    $result=mysqli_query($db,$sql);
    $qresults=mysqli_num_rows($result);
    if($qresults>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
           echo '<a href="question.php?question='.$row["qid"].'">'.$row["ques"].'</a>';
        }
     }
     else
     { echo 'no results ';
     }
    }
}
?>