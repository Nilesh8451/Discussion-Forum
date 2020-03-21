<?php
   include("config.php");
   session_start();
    $myusername=$_SESSION['username'];
    echo $myusername;
    $sql = "UPDATE  USERLOGIN SET LASTACTIVITY=NOW() WHERE username = '$myusername'";
    $result = mysqli_query($db,$sql);
    echo $result;
    session_destroy();
    header("Location:login.php");
    exit();

?>