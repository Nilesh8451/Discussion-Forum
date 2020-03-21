<!DOCTYPE html>
<?php session_start(); ?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
    .login {
        width: 45%;
        height: 500px;
        margin: auto;
        border-radius: 10px;

        margin-top: 5%;
        background: white;
        box-shadow: 10px 10px 10px;
        border: 10px solid white;
        font-family: sans-serif;

    }

    .logo {

        margin-left: 35%;

        margin-top: 0;
        padding: 0;

    }

    .form {
        margin-top: 75px;
        margin-left: auto;
        margin-right: auto;

    }

    .social {
        margin-top: 75px;
        margin-left: 20px;
        border-right: 2px solid rgba(34, 25, 25, 0.7);
    }

    .form input {
        width: 250px;
        height: 30px;
        margin: 10px;
        margin-left: 30px;
        font-family: sans-serif;
        background: rgba(255, 255, 255, 0.5);
        border: 0px;
        border-bottom: 2px solid black;
        visibility: visible;
    }

    body {
        background-image: url("background.png");
        background-position: right top;
        font-family: sans-serif;
    }

    .btext {
        color: white;
        margin-left: auto;
        margin-right: auto;
        font-size: 15px;
        font-style: sans-serif white;
    }

    .form button {
        background-color: gray;
        width: 250px;

        height: 30px;
        align-content: center;
        padding: 0px;
        height: 30px;
        margin-top: 20px;
        margin-left: 30px;
        color: white;
        border: none;
        font-family: RobotoDraft, 'Helvetica Neue';
    }

    .row {
        display: flex;
    }

    .col {
        flex: 50%;
    }

    .fb {
        background-color: #3B5998;
        color: white;
    }

    .signup {
        background-color: rgb(68, 187, 68);
        color: white;
    }

    .twitter {
        background-color: #55ACEE;
        color: white;
    }

    .google {
        background-color: #dd4b39;
        color: white;
    }


    .btn {
        width: 200px;
        padding: 12px;
        border: none;
        border-radius: 4px;
        margin: 5px 0;
        opacity: 0.85;
        display: inline-block;
        font-size: 17px;
        line-height: 20px;
        text-decoration: none;
        /* remove underline from anchors */
    }


    .btn:hover {
        opacity: 1;
    }

    .sign {
        display: none;

    }
    #sign
    {
        background: #dd4b39;
    }

    #sss {                 
        display: none;
        margin-top: -9%;
        margin-left: 25%;

    }
</style>

<body>

    <div class="login ">
        <image src="Logo.jpg" class=logo></image>
        <div class=row>
            <div id='sss' class="sss col">
                <form class="form"  method="POST">
                    <h2 style="margin-left:25%">Sign Up</h2>
                    <input id='firstname' type="text" name='firstname'  placeholder="Firstname" required><br>
                    <input id='lastname' type="text" name='lastname' placeholder="Lastname" required><br>
                    <input id='username' type="text" name="username" placeholder="Username" required><br>
                    <input id='email' type="email"  name='email' placeholder="E-mail" required><br>
                    <input id='password' type="password" name="password" placeholder="Password" required><br>

                    <button type="submit" id='sign' class="btn" name="submit">Sign Up</button><br><br>
                </form>



            </div>
            <div id="first" class="col social">
                <a href="#" class="fb btn">
                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a>
                <a href="#" class="twitter btn">
                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                </a>
                <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                    </i> Login with Google+
                </a>
                <a href="#" id='s' class="signup btn">Signup with Email<i class="fa fa-email fa-fw">
                    </i> </a>
            </div>
            <div id='login' class=col>
                <form class="form" action="login.inc.php" method="POST">
                    <h2 align=center>Login</h2>
                    <input type="text" name='username' placeholder="Username" required><br>
                    <input type="password" name='password' placeholder="Password" required><p id="ps"></p><br>

                    <button type="submit" class="btn">Login</button><br><br>
                </form>
            </div>

        </div>
    </div>
</body>
<script>
      function display(message)
      {
          alert(message);
      }
    $(document).ready(function () {
        $('#s').click(function () {
            $('#sss').css("display", "block");
            $('#first').css("display", "none");
            $('#login').css("display", "none");
        });

    });

</script>

</html>


<?php
if( isset($_GET['login']) &&$_GET['login']=='wrongpass')
{
    echo "<script>alert('Wrong Username or Password')</script>";
}

 if (isset($_POST['submit'])) {

include_once('config.php');

$first=mysqli_real_escape_string($db,$_POST['firstname']);
$last=mysqli_real_escape_string($db,$_POST['lastname']);
$user=mysqli_real_escape_string($db,$_POST['username']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$password=mysqli_real_escape_string($db,$_POST['password']);

if (empty($first)||empty($last)||empty($user)||empty($email)||empty($password))
{
     echo "<script type='text/javascript'>alert('fill all fields');</script>";
    exit();
}
else {
    //check email is valid
    if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	    { 
            echo "<script >display('Enter Valid Email');
            $('#sss').css('display', 'block');
            $('#first').css('display', 'none');
            $('#login').css('display', 'none');</script>";
        exit();
    }
    else {
        $sql="Select * from userlogin where username='$user'";
        $result=mysqli_query($db,$sql);
        $count=mysqli_num_rows($result);
        

        if($count>0)
        {
        echo "<script >display('User Taken');
        $('#sss').css('display', 'block');
        $('#first').css('display', 'none');
        $('#login').css('display', 'none');</script>";
      }
      else {
          $hashedpass=password_hash($password,PASSWORD_DEFAULT);
          //INSERT INTO DB
          $sql1="Insert into userlogin ( `firstname`, `lastname`, `username`, `email`, `password`) values ('$first','$last','$user','$email','$hashedpass')";
          mysqli_query($db,$sql1);
          $sql="Select * from userlogin where username='$user'";
          $result=mysqli_query($db,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
         
		  $_SESSION['uid']=$row['ID'];
          $_SESSION['username'] = $user;
          $_SESSION['firstname'] = $first; 
          $_SESSION['lastname'] = $last; 
          $_SESSION['email'] = $email; 
		    echo "<script >  window.location.href ='inttest.php'</script>";
		
         // header("Location:inttest.php");
           exit();
      }
    }
}
}

?>