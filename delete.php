
<?php
include 'config.php';
if (isset($_POST['aid'])){
   
    $name=$_POST['aid'];
    if(!empty($name))
    {
    $sql=" DELETE from  answers  WHERE aid = '".$name."'" ;
    $result=mysqli_query($db,$sql);
    
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