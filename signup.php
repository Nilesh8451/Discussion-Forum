
<?php

include_once('config.php');

$first=mysqli_real_escape_string($db,$_POST['firstname']);
$last=mysqli_real_escape_string($db,$_POST['lastname']);
$user=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password=mysqli_real_escape_string($db,$_POST['password']);

if (empty($first)||empty($last)||empty($user)||empty($email)||empty($password))
{
    header("Location: ../signup.php?signup=empty");
    exit();
}
else {
    //check email is valid
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {header("Location: ../signup.php?signup=invalidemail");
        exit();
    }
    else {
        $sql="Select * from userlogin where username='$user'";
        $result=mysqli_query($db,$sql);
        $rows=mysqli_num_rows($result);

        if($rows>0)
        {
            header("Location: ../signup.php?signup=usertaken");
      exit();}
      else {
          $hashedpass=password_hash($password,PASSWORD_DEFAULT);
          //INSERT INTO DB
          $sql1="Insert into userlogin ( `firstname`, `lastname`, `username`, `email`, `password`) values ('$first','$last','$user','$email','$hashedpass')";
          mysqli_query($db,$sql1);
          header("Location: ../signup.php?signup=success");
           exit();
      }
    }
}



?>