<!DOCTYPE html>
<?php 
session_start();
include 'config.php';

 if(!isset($_SESSION['uid']))
{  
  header('Location: login.php'); 
 }

?>
<html>

<head>

	<title>Group NAme</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed|Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
  $(document).ready(function(){
  var r=document.getElementById('readtab');
  var a=document.getElementById('answertab');
   $('#read').click(function()
   {

    r.style.display = "block";
    a.style.display = "none";
    

   });
    


   $('#answer').click(function()
   {

    r.style.display = "none";
    a.style.display = "block";
   
   });
   });
</script>
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

   

    .main {
        float: left;
        position: relative;
        left: 25%;
        width: 50%;
        background-color: #FAFAFA;
      /*  background-color: aqua;*/  
    }

    .group_tab {
        position: relative;
        margin: 2%;
        padding: 3%;
        background-color: white;
        width: 90%;
        height:190px;
        border: solid #E2E2E2 1px;
        border-radius: 10px;
        box-shadow: 1px 1px 1px #aaaaaa;
 /*       background-color: yellow;  */

    }

    #cmenu{
         width: 98%;
         height:35px;
         position: relative;
         float: left;
         top:14px;
   /*      background-color: blue;  */
    }

    .ma{
        position: relative;
        float: left;
    	width: 100px;
    	height: 100%;
/*    	background-color: red;  */
    }


    .group_photo{

    	position: relative;
    	float: left;
    	width: 150px;
    	height: 150px;
  /*  	background-color: aqua;  */
    }

    .group_feeds{

    	position: relative;
    	float: left;
    	width: 450px;
    	height: 150px;
   /*  	background-color:pink;  */
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
      /*  background-color: yellow;   */

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
      /*  background-color: green;   */
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

  #pho{
    width: 100%;
    height: 100%;
      background-size:cover;
         background-position:center;
  }

  .gn{

  	width:100%;
  	height: 50px;
  
  	font-size: 20px;
  	font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif ;
  }

  #un{
font-size: 23px;

font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
  }

  .fo{

  	width: 300px;
  	height: 30px;

  }

  #follow{

  	display: block;
  	width:150px;
  	height: 100%;
  	color: black;
  	font-size: 20px;
  	text-align: center;
  	text-decoration: none;
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

  .mf{
    position: relative;
    top:7px;
  	display: block;
  	text-decoration: none;
  	font-size: 20px;
  	text-align: center;
  	color:black;
  }

  #read:hover {
  background-color: gray;
  }
   #answer:hover {
  background-color: gray;
  }
   #top:hover {
  background-color: gray;
  }
  #icon{
    position: relative;
    top:3px;
  }

 #answertab{
 	display:none;
 }

  .descsty{
   position: relative;
   left:25px;
   height: 240px;
   width: 90%;
   top:5px;
   font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif ;
   font-size: 18px;
   border-radius: 10px;
}

#firstdiv{

}

#subbut{
    display: none;
	width: 100%;
	height: 40px;
/*	background-color: red;   */
}
 #up :hover {font-size:15px;}
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
#butt{

	width:100px;
	height: 100%;
	float:right;
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
 .writeans{
    display: none;
  	width:100%;
  	height:200px;
  /*	background-color:aqua; */ 
  }


</style>

<body>

    <div class="menu">
      
<?php include 'menu.php';?>
  
    </div>
   


 
    <div class="main">
    	<div class="group_tab">
    		<div class="group_photo">
    			<img src="col.jpg" id="pho">
    		</div>
    		<div class="group_feeds">
    			<div class="gn">
    			<h2 id="un">
				<?php  $sql="select * from c_d where id=$_SESSION[uid]";
     $result=mysqli_query($db,$sql);
     $row= mysqli_fetch_assoc($result);
	 echo $row['college_name'];?>(college forum)</h2>
                </div>
                <br><br><br>
                <div class="fo">
                	<a href="#" id="follow"><i class="	fa fa-save"></i> Following</a>
                </div>
    		</div>
            
    		<div id="cmenu">
    			<hr>
    			<div class="ma" id="read">
    				<a  class="mf" id="rea">Read</a>
    			</div>
    			<div class="ma" id="answer">
    				<a  class="mf" id="ana">Answer</a>
    			</div>
    			
    		</div>
    		<hr>
    	</div>


      <div id="readtab" >
                <?php
				  $sql="Select * from c_d where id=$_SESSION[uid]";
        
         $result1=mysqli_query($db,$sql);
        $row1= mysqli_fetch_assoc($result1);
		
         $sql="Select * from questions where area='$row1[college_name]'";
        
         $result=mysqli_query($db,$sql);
		
         $qresults=mysqli_num_rows($result);
         
         if($qresults>0)
         {
             while($row= mysqli_fetch_assoc($result))
             {
			 $sqla='select * from answers where qid='.$row['qid'].' order by upvotes desc limit 1';
                $resulta=mysqli_query($db,$sqla);
                $qresultsa=mysqli_num_rows($resulta);
               if($qresultsa>0)
               {
                echo '<div class="ques_tab"><div class="ques"><span class="topic">'.$row["category"].'</span><br>
                <span class="question">'.$row["ques"].'</span><br>
                <span class="writer">Written by:'.$row["author"].'</span><br>
                <span class="time">'.$row["time"].'</span>';
               
                $rowa=mysqli_fetch_assoc($resulta);
                echo '<div class="ans" color="#333333">'.$rowa['answer']. ' </div><div id="up"><br><button class="upbut"  id='.$rowa["aid"].'value=0><i class="fa fa-thumbs-o-up w3-text-indigo" style="font-size:20px;"></i> Upvote</button></div><br><br> </div> </div>';
                
               }
			  
             }
         }
		 ?>
          
</div>


      <div id="answertab">
          <?php
           $uid=$_SESSION['uid'];
  $sql="Select * from c_d where id=$_SESSION[uid]";
        
         $result1=mysqli_query($db,$sql);
        $row1= mysqli_fetch_assoc($result1);
		
         $sql="Select * from questions where area='$row1[college_name]'";
        
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
   ?>
             </div> 
  <div class="profile"></div>
     
</body>

</html>

<script>

    $(document).ready(function(){
        $('#upbut').click(function(){
            $('#upbut').css('color','green');
            $('#downbut').css('color','black');
        });
        $('#downbut').click(function(){
            $('#downbut').css('color','red');
            $('#upbut').css('color','black');

        });
    });
    
   $('#giveans').click(function() 
   {
	$('#writeans').toggle();
	$('#subbut').toggle();
   });

   $('#subbut').click(function() 
   {
	$('#writeans').toggle();
	$('#subbut').toggle();
   });

   
   
   $('#1closediv').click(function()
    {
   	$('#1div').hide();
   });





</script>
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
 <script>
$(document).ready(function () {
  
    $('button').click(function(){
	var a=$(this).attr('value');
        if (a==0)
        { console.log(this.id);
          $(this).css({'color':'green','font-size':'15px'});
          $(this).attr('value','1');
          $.post("upvote.php",{aid:this.id},function(data,status){
            console.log(count);
          });

      
        
        }
       
        else
        {
        $(this).css({'color':'black','font-size':'15px'});
      
        }
        });
    });




</script>


