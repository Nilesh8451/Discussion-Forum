
<?php
session_start();
$writer=$_SESSION['username'];
include 'config.php';
if (isset($_POST['answer'])){
   
    $ans=$_POST['answer'];
    $qid=$_POST['qid'];

    if(!empty($ans))
    {
    $sql="insert into answers(`qid`, `answer`, `upvotes`, `downvotes`, `writer`, `atime`) values('$qid','$ans',0,0,'$writer',NOW() )";
    $result=mysqli_query($db,$sql);

     $sql="insert into notification(qid,writer) values('$qid','$writer' )";
 $result=mysqli_query($db,$sql);
    }
}
?>