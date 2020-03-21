<?php 
session_start();
include 'config.php';
$question=$_GET['question'];
if(!isset($_COOKIE['qid']))
{  setcookie('qid', $question, time() + (86400 * 30), "/");
   $sql="
   UPDATE questions
   SET views = views + 1
   WHERE qid = '".$question."'
";
   $result=mysqli_query($db,$sql);
  
}
if(isset($_GET['a']))
{
	 $sql="delete  FROM notification WHERE qid ='$question';" ;
    $result=mysqli_query($db,$sql);
}

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
    .feeds a
    {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        text-decoration:none;
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
  

</style>

<body>

    <div class="menu">
        <?php include'menu.php';?>
    </div>
    <div class="feeds">
        <h3>Feeds</h3><hr>
        <ul>
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
        
        <?php
        
         $sql="Select * from questions where qid='$question'";
         $result=mysqli_query($db,$sql);
         $qresults=mysqli_num_rows($result);
         $row= mysqli_fetch_assoc($result);
        
        
             
             
                echo '<div class="ques_tab"><div class="ques"><span class="topic">'.$row["category"].'</span><br>
                <span class="question">'.$row["ques"].'</span><br>
                <span class="writer">Written by:'.$row["author"].'</span><br>
                <span class="time">'.$row["time"].'</span>';
                
                $sqla="select * from answers where qid=".$row['qid'];
                $resulta=mysqli_query($db,$sqla);
                $qresultsa=mysqli_num_rows($resulta);
            
               
                if($qresultsa>0)
                { $i=0;
                 while($rowa= mysqli_fetch_assoc($resulta))
                 {  
                     $i++;
                    echo '<div class="ans" color="#333333"><b>Answer '.$i.'</b></br>'.$rowa['answer']. ' </div><div id="up"><br><button class="upbut"  id='.$rowa["aid"].' value=0><i class="fa fa-thumbs-o-up w3-text-indigo" style="font-size:20px;"></i> Upvote</button></div><br><br><br> </div><hr>';
                }
                }
                echo '</div>';
               
        
        ?>
          

              
 <!--  <div class="ques_tab">
            <div class="ques"><span class="topic">Topic name</span><br>

                <span class="question">How to make Quora?</span><br>
                <span class="writer">Written by:</span><br>
                <span class="time">19hrs ago</span>
                <div class="ans">
                    <details>
                        <summary>Your character is cleaning their room. Or maybe your character isn’t one to clean. Maybe
                            your character is digging through their untidy drawers to find an item that they misplaced. For
                            whatever the reason is, your character stumbles across an old photograph. If your character is
                            in a state of peacefulness now, it would be best to have the photograph depict a more chaotic
                            time in their life. If the character’s life is currently in turmoil,</summary> it would be best
                        to have the photo depict a happier time. This will work well because not only will your character
                        dwell on a past period of their life, but they can compare that time to the present. Maybe the photograph
                        shows a better time; maybe because of this, the person is suddenly inspired to turn their life around.
                        Or perhaps the character sees the photograph of what he or she once viewed as a bad event in their
                        life, only to realize that it wasn’t as horrible as it seemed. Maybe they wish they could go back
                        to the day that the photo was taken, or maybe they wish to rip it to shreds. The possibilities are
                        endless.
                    </details>
                </div><br>
                <div id='up'><button id='upbut'><i class="fa fa-thumbs-o-up w3-text-indigo" style="font-size:20px;"></i> Upvote</button></div><div id='down'><button id='downbut'><i class="fa fa-thumbs-o-down w3-text-indigo" style="font-size:20px;"></i> Downvote</button></div><br>
            </div>

        </div>
        


    </div>-->
    <div class="profile"></div>
</body>

</html>



 <script>
$(document).ready(function () {
  
    $('button').click(function(){
	var a=$(this).attr('value');
        if (a==0)
        { console.log(this.id);
          $(this).css({'color':'green','font-size':'15px'});
          $(this).attr('value','1');
          $.post("upvote.php",{aid:this.id,value:a},function(data,status){
            console.log(count);
          });

      
        
        }
       
        else
        {
        $(this).attr('value','0');
        $.post("upvote.php",{aid:this.id,value:a},function(data,status){
            console.log(count);
          })
        $(this).css({'color':'black','font-size':'15px'});
      
        }
        });
    });




</script>


