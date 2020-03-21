<?php
session_start();
include 'config.php';
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed|Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        background-color: #FAFAFA;
    }

    .menu {
        position: relative;
        top: 0px;
        width: 100%;
        height: 50px;
        border: solid 1px #DDDDDD;
    }

    .feeds {
        float: left;
        position: relative;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        width: 25%;
        padding-left:10%;
        padding-top:50px;
        background-color: #FAFAFA;
        font-weight: 400;
        font-size: 15px;
        line-height: 25px;
        color: #666666;
    }


    .main {
        float: left;
        position:absolute;
        left: 25%;
        width: 50%;
        background-color: #FAFAFA;
    }

    .ques_tab {
        position: relative;
        margin: 2%;
        padding: 3%;
        background-color: white;
        width: 90%;
        border: solid #E2E2E2 1px;
        border-radius: 10px;
        box-shadow: 1px 1px 1px #aaaaaa;

    }

    .question {
        font-family: q_serif, "Georgia", Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
        font-weight: 700;
        font-size: 18px;
        line-height: 23px;
        color: #262626;
    }

    .ans {
        font-size: 15px;
        font-family: 'Ubuntu', sans-serif;
        line-height: 24px;
        font-weight: 400;
        color: #333333;
        outline:none;
    }
  
    .writer {
        line-height: 18px;
    }
   .name
   {
       position:relative;
       margin-left:150px;

   }
    .profile {
        float: left;
        position: absolute;
        left: 75%;
        width: 25%;

        background-color: #FAFAFA;
    }

    .topic,
    .time {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 13px;
        line-height: 18px;
        font-weight: 400;
        color: #999999;
    }
    #down
    {
      float: right;
    }
    #up
    { 
      float: left;
    }
    #up  button,#down button
    {
        border:none;
        background-color: Transparent;
        outline:none;
    }
   #down  :hover
    {
        font-size:15px;

    }
    #up :hover {font-size:15px;}
    img.center {
display: block;
margin-left: 20px;
float:left;
margin-right: auto;
}
  
.feeds a
    {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        text-decoration:none;
        font-weight: 400;
        font-size: 15px;
        line-height: 25px;
        color: #666666;
        
    }

</style>

<body>

    <div class="menu">
        <?php include'menu.php';?>
    </div>
    <div class="feeds">
        <h3>Feeds</h3><hr>
        <ul>
            <li>Topics</li>
            <li>Topics</li>
              <li><a href="topic.php?topic=Programming">Programming</a></li>
              <li><a href="topic.php?topic=Science">Science</a></li>
              <li><a href="topic.php?topic=books">Books</a></li>
              <li><a href="topic.php?topic=economics">Economics</a></li>
              <li><a href="topic.php?topic=movies">Movies</a></li>
              <li><a href="topic.php?topic=music">Music</a></li>
              <li><a href="topic.php?topic=sports">Sports</a></li>
              <li><a href="topic.php?topic=gaming">Gaming</a></li>
              <li><a href="topic.php?topic=food">Food</a></li>
              <li><a href="topic.php?topic=travelling">Travelling</a></li>
             
             
          

        </ul>


    </div>
    <div class="main">
    <div class="ques_tab">
        <div class='ques'>
        <br><br>
        <h2 class='name'>Welcome Admin<br><br>
</div></div>
        <?php
         $sql="Select * from userlogin where ID=".$_SESSION['uid'];
         $result=mysqli_query($db,$sql);
         $row= mysqli_fetch_assoc($result);
         $lastlogin=$row['lastactivity'];
         $sql="Select * from answers where atime >="."'$lastlogin'";
         $result=mysqli_query($db,$sql);
         $qresults=mysqli_num_rows($result);
        ?>
         <div class="ques_tab">
        <div class='ques'>
     
        <h2 class='name'><?php echo 'Last Login:   '.$lastlogin ?><br><br>
</div></div>
        <?php
         if($qresults>0)
         {
             while($row= mysqli_fetch_assoc($result))
             {   $sqla='select * from questions where qid='.$row['qid'] ;
                $resulta=mysqli_query($db,$sqla);
                $qresultsa=mysqli_num_rows($resulta);
                $rowa=mysqli_fetch_assoc($resulta);

                echo '<div class="ques_tab"><div class="ques"><span class="topic">'.$rowa["category"].'</span><br>
                <span class="question">'.$rowa["ques"].'</span><br>
                <span class="writer">Written by:'.$rowa["author"].'</span><br>
                <span class="time">'.$rowa["time"].'</span>';
                
               
                echo '<div class="ans" color="#333333">'.$row['answer']. ' </div><div id="up"><br><button class="upbut"  id='.$row["aid"].'> <i class="fas fa-times-circle" style="font-size:20px;"></i>Delete</button></div><br><br> </div> </div>';
                
               
             }
         }
        
        ?>
        
    <div class="profile"></div>
</body>

</html>


<script>
$(document).ready(function () {
    
    $('button').click(function(){
      
         console.log(this.id);
          $(this).parent().parent().parent().toggle();
          $.post("delete.php",{aid:this.id},function(data,status){
            console.log(data);
          });
        });
    });




</script>





