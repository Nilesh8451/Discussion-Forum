<?php 
session_start();
include 'config.php';

 if(!isset($_SESSION['uid']))
{  echo "go back";
  header('Location: login.php');
  
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
   
    #actiondiv{
    width:100%;
    height:40px;
 /* 	background-color: red;  */
  }
  #anstab{
    position: relative;
    float:left;
  	width:100px;
  	height:40px;

  }
  #passtab{
    position: relative;
    float:right;
  	width:100px;
  	height:40px;

  }
  .actionbar
  {
  	position: relative;
  	float:left;
    top:5px;
    font-size: 20px;
  	display: block;
  	width: 100%;
  	height: 100%;
  	text-decoration: none;
  	color: black;
  	text-align: center;
  	font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif ;
  }
  #icon{
    position: relative;
    top:3px;
  }

  .writeans{
    display: none;
  	width:100%;
  	height:200px;
  /*	background-color:aqua; */ 
  }

  .descsty{
   position: relative;
   left:25px;
   height: 200px;
   width: 90%;
   top:5px;
   font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif ;
   font-size: 18px;
   border-radius: 10px;
}
.clear{
    clear: both;
}

#firstdiv{

}


.butt{

	width:50px;
	height: 50px;
	position:relative;
/*	background-color: blue;   */
}

#sb{
    width:100%;
    height: 100%;
    color:black;
    font-size: 20px;
    font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif ;
    background-color:#3E78AD;
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
           $uid=5;$_SESSION['uid'];
  
           $sql="select * from a_o_s where id=$uid";
           $result=mysqli_query($db,$sql);
           $row= mysqli_fetch_assoc($result);
          
           $prefernum=array($row['programming'], $row['science'], $row['books'], $row['economics'], $row['movies'], $row['music'], $row['sports'], $row['gaming'], $row['food'], $row['travelling']);
           $prefer=array('programming', 'science', 'books', 'economics', 'movies', 'music', 'sports', 'gaming', 'food', 'travelling');
              
          for ($i=0; $i <sizeof($prefernum) ; $i++) { 
            if($prefernum[$i]==1)
            {
               
          
                 $category="'".$prefer[$i]."'";
                 
                
                 $sql="Select * from questions where category="."'".$prefer[$i]."'and area='open'";

               
               $result=mysqli_query($db,$sql);
               $qresults=mysqli_num_rows($result);
             
        

         if($qresults>0)
         {
             while($row= mysqli_fetch_assoc($result))
             {  $sqla='select * from answers where qid='.$row['qid'];
                $resulta=mysqli_query($db,$sqla);
                $qresultsa=mysqli_num_rows($resulta);
               if(1)
               {
                echo '<div class="ques_tab"><div class="ques"><span class="topic">'.$row["category"].'</span><br>
                <span class="question">'.$row["ques"].'</span><br>
                <span class="writer">Written by:'.$row["author"].'</span><br>
                <span class="time">'.$row["time"].'</span>
                     </div> 
                <br><br>
                <div id="actiondiv">
                    <div id="anstab">
                     <a href="#" class="actionbar ans" id="giveans"><i class="fa fa-edit" id="icon"></i> Answer</a>
                    </div>
                 </div>  
             
                 <div class="writeans" id="writeans1">
              
                 
                     <textarea class="answer" rows="5" cols="70" class="descsty" maxlength="1000" placeholder="Write your answer here..."></textarea>
                     <button class="butt" id='.$row["qid"].' type="submit" name="Submit" >Submit</button>
                     <div class="clear"></div>
                  
                 </div>
    
            </div>';
               
              
               }
            }
               }
             }
         }
        
   ?>
          

 
    <div class="ques_tab" id="1div">
            <div class="ques"><span class="topic">Topic name</span><br>

                <span class="question">How to make Quora?</span><br>
                <span class="writer">Written by:</span><br>
                <span class="time">19hrs ago</span>
                
            </div>
            <br><br>
            <div id="actiondiv">
            	<div id="anstab">
                 <a href="#" class="actionbar ans" id="giveans"><i class="fa fa-edit" id="icon"></i> Answer</a>
                </div>
                <div id="passtab">    
               <a href="#" class="actionbar" id="1closediv"><i class="fas fa-pencil-ruler" id="icon"></i> Pass</a>
               </div>
             </div>	
             <div class="writeans" id="writeans1">
           <form id='answer' action="write.php">
             
             	<textarea rows="5" cols="70" class="descsty" maxlength="1000" placeholder="Write your answer here..."></textarea>
                 <input class='butt' type="submit" name="Submit" >
              </form>
             </div>

        </div>
        
    <div class="ques_tab" id="1div">
            <div class="ques"><span class="topic">Topic name</span><br>

                <span class="question">How to make Quora?</span><br>
                <span class="writer">Written by:</span><br>
                <span class="time">19hrs ago</span>
                
           
            <br><br>
            <div id="actiondiv">
            	<div id="anstab">
                 <a href="#" class="actionbar ans" id="giveans"><i class="fa fa-edit" id="icon"></i> Answer</a>
                </div>
             </div>  
         
             <div class="writeans" id="writeans1">
          
             
             	<textarea class='answer' rows="5" cols="70" class="descsty" maxlength="1000" placeholder="Write your answer here..."></textarea>
                 <button class='butt' type="submit" name="Submit" >Submit</button>
                 <div class="clear"></div>
              
             </div>

        </div>
        
    <div class="profile"></div>
</body>

</html>

<script>
$(document).ready(function () {
    $('.ans').click(function() 
   {
  $(this).parent().parent().next().toggle();
   // $('.writeans').toggle();

   });

   $('.butt').click(function() 
   { var id=this.id;
    var name=$(this).prev().val();
    console.log(name,id);
    $.post("addanswer.php",{qid:this.id , answer:name},function(data,status){
				
      console.log(data);
               
    });
    $(this).parent().prev().parent().toggle();		
	
   });

   
   
   $('#1closediv').click(function()
    {
   	$('#1div').hide();
   });
    });




</script>