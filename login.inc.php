<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      if(empty($myusername)||empty($mypassword))
      {
        header("Location: ../login.inc.php?login=error");
         exit();
      }
      else {
       
      
      $sql = "SELECT * FROM userlogin WHERE username = '$myusername'";
      $result = mysqli_query($db,$sql);
     
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
  
       $count = mysqli_num_rows($result);
      if($count==0)
      {
        header("Location: ./login.php?login=wrongpass");
      }
      // If result matched $myusername and $mypassword, table row must be 1 row
		
    if($count == 1) {
         $hashedpass=password_verify($mypassword,$row['password']);
         if($hashedpass== false)
         {  
          header("Location: ./login.php?login=wrongpass");
          echo "<script>alert('Wrong Username or Password')</script>";
  
         }

    else if($hashedpass== true) {
      
          $_SESSION['uid']=$row['ID'];
          $_SESSION['username'] = $row['username']; 
          $_SESSION['firstname'] = $row['firstname']; 
          $_SESSION['lastname'] = $row['lastname']; 
          $_SESSION['email'] = $row['email']; 
          echo  $_SESSION['username'];
          header("location: homepage.php");
      }
   }
  }
}
?>