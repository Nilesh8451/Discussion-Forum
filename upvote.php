
<?php
include 'config.php';
if (isset($_POST['aid'])){
   
    $name=$_POST['aid'];
    $value=$_POST['value'];
    if(!empty($name))
    {
    if($value==0)
    {
    $sql=" UPDATE answers SET upvotes = upvotes + 1 WHERE aid = '".$name."'" ;
    $result=mysqli_query($db,$sql);
    }
    else if($value==1)
    {
        $sql=" UPDATE answers SET upvotes = upvotes - 1 WHERE aid = '".$name."'" ;
        $result=mysqli_query($db,$sql);
    }
    
    if($result)
    {
        echo 'success';
    }
    else
    {
        echo 'not success';
    }
    }
}
?>