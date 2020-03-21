<?php
session_start();
include 'config.php';
$servername = "localhost";
$username = "root";
$dbname = "quest";

// Create connection
$conn = new mysqli($servername, $username,"", $dbname);
$user =$_SESSION["username"];
$a=$_SESSION['uid'];
?>


<html>

<head>
	<title>Main Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="model.css">
 <!---   <link rel="stylesheet" href="profilestyle.css">  ---->

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    
    *{
    margin: 0px;
    padding: 0px;
    
}

/*#hsd{
    width:90%;

    display: block;
    background-color: red;
    box-shadow: 10px 10px 10px ;
}
*/.question {
        font-family: q_serif, "Georgia", Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
        font-weight: 700;
        font-size: 18px;
        line-height: 23px;
        color: #262626;
    }

#searchstyle
{
float:left;
    width:30%;
    height:100%;
    background-color:white;
}
#searchstyle input
{
    width:90%;
    margin-top:12px;
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

    #ka{

        position: relative;
        margin: 2%;
        padding: 3%;
        background-color: white;
        width: 90%;  
      
    }

#feeds
{
    margin-top:100;
    margin-left:100;
    width:15%;
    height:80%;
    position:fixed;
    background-color:white;
    
}

#help
{
    opacity:0.5;
    top:0;
    text-decoration:none;
    position:relative;
    float:right;
    color:black;
}

#btn2
{
    
    margin:10;
    width:95%;
    border-radius: 5px;
    height:20px;
    font-size:15px;
}


#userpart{
    padding-top:50;
    width:100%;
    height:90%;
/*  background-color:red;  */
}

#partone{
    
    width:980px;
    height:595px;
/*  background-color:blue;  */
    float:left;
}

#parttwo
{
    width:365px;
    height:595px;
/*  background-color:yellow;  */
    float:left;
}

#userinfo
{
    
    width:980px;
    height:220px;
/*  background-color:aqua;  */
}

#adduserf{
    
    width:350px;
    height:375px;
/*  background-color:green;   */
    float:left;
}

#userfield{
    
    width:180px;
    height:375px;
    float:right;
/*  background-color:brown;  */
}

#displayinfo{
    position:relative;
    width:590px;
/*  height:375px;  */
/*  background-color:red;  */
    float:left;
    left:20px;
}

#addphoto{
    width:350px;
    height:220px;
/*  background-color:yellow;  */
    float:left;
    
}

#photofield{
    
    width:180px;
    height:220px;
    float:right;
/*  background-color:white;   */
}

#usernameinfo{
    position:relative;
    width:590px;
    height:220px;
/*  background-color:brown;   */
    float:left;
    left:20px;
}

#photosty{
    position:relative;
    width:100%;
    height:150px;
    border-radius:50%;
    top:40px;

}

#addp{
    text-decoration:none;
    display:block;
    font-size:18px;
    background-color:rgba(148, 142, 142,0.7);
    width:100%;
    text-align:center;
    position:relative;
    top:20px;
    font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
    
}

#upl{
    font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
    text-align: center;
  
}

#choosefile{
    position: relative;
    width:780px;
    height:200px;

}
input[type=file]
{
     font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
    position: relative;
    top:80px;
    left:20px;
    font-size: 25px;
       color: #B92B27;
}

#bu{
    width: 120px;
    height: 50px;
    font-weight: bold;
    position: relative;
    background-color: #3E78AD;
    font-size: 20px;
    top:80px;
    font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
}
.feedlinks
{
    text-decoration:none;
    opacity:0.5;
    display:block;
    margin:10px;
    font-size:15px;
    color:black;
    
}
.feedlinks:hover{
    
    color:blue;
    background-color:#E6E6E6;
}
.une{

    padding:7px;
    color:black;
    opacity:0.5;
    text-decoration:none;
    font-family: q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;

}

.uname{

     position: relative;
     top: 5px;
}
#un{
    font-family: q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
    padding:12px;
}
#username{
    position:relative;
    top:30px;
    width:100%;
    height:40px;
/*  background-color:yellow;   */
    font-family: sans-serif;
}
.displayuserdetails
{
    width:70%;
    height:200px;
    box-shadow: 6px 6px 10px 10px;
    background-color: blue;
}


#writedesc{
    position:relative;
    width:100%;
    height:20px;
/*  background-color:yellow;  */
    top:50px;
    font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
    
}

#adddesc{
    color:black;
    text-decoration:none;
        padding-left:12;
}

#adddesc:hover{

    text-decoration:underline;
}



.dis{
    
    font-size:18px;
    font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
    padding:12px;
}

#descbox{
    position: relative;
    top:65px;
    width:100%;
    height: 90px;
    float:left;    
/*  background-color:yellow;  */
}

.descsty{
   position: relative;
   left:20px;
   height: 80px;
   width: 80%;
   top:5px;
   font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif ;
   font-size: 17px;
}



#de{
    font-weight: bold;
    word-wrap: break-word;
    padding-left: 12px;
    font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif ;
   
}
#addinfo{
    position:relative;
     left:26px;
     top:20px;
       width:300px;
       height:250px;
     /*  background-color:red;  */
}

#crehigh{
    font-family: q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
    padding:12px;
    font-size:17px;
}

#bu{

	position: relative;
	right:150px;
}

.addlinks{
    
    text-decoration:none;
    display:block;
    margin:15px;
    font-size:17px;
    font-family: q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif;
}

.addlinks:hover{
    
    text-decoration:underline;
}

#knowsabout{
    position:relative;
     left:26px;
     top:60px;
       width:300px;
       height:180px;
    /*   background-color:red;*/
}


#ed{
    display:none;
    opacity:0.5;
    top:0;
    text-decoration:none;
    position:relative;
    color:black;
}

#username:hover  #ed{
      display:inline;
}

#n{
     width:350px;
     height: 100%;
     float: left;
}

#e{
    position: relative;
    top:8px;
     width:50px;
     height: 100%;
     float: left;
}

#usa{
    position: relative;
    bottom: 4px;
    font-size: 18px;
    width: 70%;
    font-family:q_serif, Georgia, Times, "Times New Roman", "Hiragino Kaku Gothic Pro", Meiryo, serif ;

}


#quedisplay{

    display: none;
}

#ansdisplay{

    display: none;
}


#knab{

    margin-left: 20px;
}
</style>

<body>
	<div class="menu">
        <?php include'menu.php';?>
    </div>
	
    <div id="userpart">
	    <div id="partone">
	        <div id="userinfo">
		        <div id="addphoto">
                    <div id="photofield">
					    

                         <?php
                        
                        $servername = "localhost";
                        $username = "root";
                        $dbname = "quest";

                        // Create connection
                        $conn = new mysqli($servername, $username,"", $dbname);
                       $a=$_SESSION['uid'];
                        $sql="SELECT * FROM profileinfo where uid = '$a'" ; 
                        $result =mysqli_query($conn,$sql);

                        $row =mysqli_fetch_array($result);

                        echo '<img src="data:image;base64,'.$row['image'].'" id="photosty">';                     

                         ?>
				         <a href="#" id="addp">Add Photo</a>
					</div>
			    </div>
			    <div id="usernameinfo">
				    <div id="username">
				        <div id="n">

				    		<h2><span id="un" class="uname"></span></h2>
				    	</div>
				    	<div id="e">
                            <h3><a href="#" class="une" id="ed"  onclick="edit()">Edit</a></h3> 
				    	</div>
				     </div>
					
					  <div id="writedesc">
					   <a href="#" id="adddesc" onclick="editd()">Write a description about yourself</a>
					 </div>
					 
					 <div id="descbox">
					 	<span id="de"></span>
					 </div>
				</div>
		    </div>
		    <div id="adduserf">
			     <div id="userfield">
				         <p class="dis">Feeds</p><hr>
                         <a href="#" class="feedlinks" id="acti"></a>
                           <a href="#" class="feedlinks" id="topi"></a>
	                     <a href="#" class="feedlinks" id="answ">Answers</a>
	                     <a href="#" class="feedlinks" id="ques">Questions</a>
						   
						
				 </div>
			</div>
		    <div id="displayinfo">
			    <p class="dis" id="di">Answers</p>
				<hr>
           <div id="quedisplay">
				  <?php
         $sql="Select * from questions where author= '$user'";
         $result=mysqli_query($db,$sql);
         $qresults=mysqli_num_rows($result);
         
         if($qresults>0)
         {
             while($row= mysqli_fetch_assoc($result))
             {
              
               if($qresults>0)
               {
                echo '<div class="ques_tab"><div class="ques"><span class="topic">'.$row["category"].'</span><br>
                <a href="./question.php?question='.$row["qid"].'"> <span class="question">'.$row["ques"].'</span></a><br>
                <span class="writer">Written by:'.$row["author"].'</span><br>
                <span class="time">'.$row["time"].'</span></div></div>';
               }
               else{
                         echo '<div class="ques_tab"><span>no questions posted yet</span></div>';

               }
              
             }
         }
        
        ?>   

    </div>



     <div id="ansdisplay">
                  <?php
         $sql="Select * from answers where writer= '$user'";
         $result=mysqli_query($db,$sql);
         $qresults=mysqli_num_rows($result);
         
         if($qresults>0)
         {
             while($row= mysqli_fetch_assoc($result))
             {
               $sqla='select * from questions where qid ='.$row['qid'].'';
                $resulta=mysqli_query($db,$sqla);
                $qresultsa=mysqli_num_rows($resulta);
               if($qresultsa>0)
               {
                $rowa=mysqli_fetch_assoc($resulta);
                echo '<div class="ques_tab"><div class="ques"><span class="topic">'.$rowa["category"].'</span><br>
                <span class="question">'.$rowa["ques"].'</span><br>
                <span class="writer">Written by:'.$rowa["author"].'</span><br>
                <span class="time">'.$rowa["time"].'</span>';
               
                
                echo '<div class="ans" color="#333333">'.$row['answer']. '<br>Written by: ' .$row['writer']. '</div><div id="up"><br><button class="upbut"  id='.$row["aid"].' value=0><i class="fa fa-thumbs-o-up w3-text-indigo" style="font-size:20px;"></i> Upvote</button></div><br><br> </div> </div>';               
               }
               else{
                         echo '<div class="ques_tab"><div class="ques"><span class="topic">'.$row["category"].'</span><br>
                <span class="question">'.$row["ques"].'</span><br>
                <span class="writer">Written by:'.$row["author"].'</span><br>
                <span class="time">'.$row["time"].'</span></div></div>';

               }
              
             }
         }
        
        ?>   

    </div>
			</div>
	    </div>
	    <div id="parttwo">
		    <div id="Addinfo">
			     <h3 id="crehigh">Credentials & Highlights</h3><hr>
	                     <a href="#" class="addlinks" id="bt">Add employment credential</a>
	                     <a href="#" class="addlinks" id="bta">Add education credential</a>
						 <a href="#" class="addlinks" id="btab">Add a location credential</a>
	                     
			</div>
			
			<div id="knowsabout">
			      <h3 id="crehigh">Knows about<span><a href="#" id="help">Edit</a></span></h3><hr>

                  <div id="ka">
                    <?php
                      $sql="Select * from a_o_s where id= '$a'";
                       $result=mysqli_query($db,$sql);
                      $row= mysqli_fetch_assoc($result);

                    if($row['programming']==1)
                    {
                        echo '<ul><li id="knab"> Programming</li></ul><br> ';
                    }
                    if($row['science']==1)
                    {
                        echo '<ul><li id="knab"> Science</li></ul><br> ';
                    }
                    if($row['books']==1)
                    {
                        echo '<ul><li id="knab"> Books</li></ul><br> ';
                    }
                    if($row['economics']==1)
                    {
                        echo '<ul><li id="knab"> Economics</li></ul><br> ';
                    }

                    if($row['movies']==1)
                    {
                        echo '<ul><li id="knab"> Movies</li></ul><br> ';
                    }
                    if($row['music']==1)
                    {
                        echo '<ul><li id="knab"> Music</li></ul><br> ';
                    }
                    if($row['sports']==1)
                    {
                        echo '<ul><li id="knab"> Sports</li></ul><br> ';
                    }
                    if($row['gaming']==1)
                    {
                        echo '<ul><li id="knab"> Games</li></ul><br> ';
                    }
                    if($row['food']==1)
                    {
                        echo '<ul><li id="knab"> Food</li></ul><br> ';
                    }
                    if($row['travelling']==1)
                    {
                        echo '<ul><li id="knab"> Travelling</li></ul><br> ';
                    }
                    ?>
                      
                  </div>
			</div>
		</div>
	</div>

	
	<div id="myFModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="fclose">&times;</span>
      <h2>Edit credentials</h2><br>
	  <p>Credentials also appear on answers you write.</p>
	  <hr>
    </div>
    <div class="modal-body">
	<form action="empinsert.php" method="GET">
      <h4>Add employment credential</h4><br>
	  <table>
	  <tr>
	     <td>Position   </td>
		 <td><input type="text" name="position" placeholder="store manager" maxlength="50" size="60" /></td>
	  </tr>
	  <tr>
	     <td>Company/Organization</td>
		  <td><input type="text" name="company" id="nike" placeholder="Nike" maxlength="50" size="60" /></td>
	  </tr>
	  <tr>
	     <td>Start Year</td>
		 <td><input type="number" name="startyear" id="sye" min="1900" max="2099" step="1" value="2016"/></td>
	  </tr>
	  <tr>
	     <td>End Year</td>
		 <td><input type="number" name="endyear" id="eye" min="1900" max="2099" step="1" value="2016"/></td>
	  </tr>
	  <tr>
	  </tr>
	  </table>
	  <input type="submit" class="button button1" id="empinfor" value="Submit">
	  <button id="can" class="button button1" onclick="clo()">Cancel</button>
    </form>
</div>
</div>
</div>


<div id="mySModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="sclose">&times;</span>
      <h2>Edit credentials</h2><br>
	  <p>Credentials also appear on answers you write.</p>
	  <hr>
    </div>
    <div class="modal-body">
	<form action="eduinsert.php" method="GET">
      <h4>Add education credential</h4><br>
	  <table>
	  <tr>
	     <td>School   </td>
		 <td><input type="text" name="school" placeholder="Vartak college" maxlength="50" size="60" /></td>
	  </tr>
	  <tr>
	     <td>Concentration</td>
		  <td><input type="text" name="concentration" placeholder="Ethics" maxlength="50" size="60" /></td>
	  </tr>
	  <tr>
	     <td>Degree Type</td>
		  <td><input type="text" name="degreetype" placeholder="BE" maxlength="50" size="60" / id="d"></td>
	  </tr>
	  <tr>
	     <td>Graduation Year</td>
		 <td><input type="number" name="graduationyear" min="1900" max="2099" step="1" value="2016" display="none"/></td>
	  </tr>
	  <tr>
	  </tr>
	  </table>
   
	  <input type="submit" class="button button1" id="esub" value="Submit">
	  <button id="can" class="button button1" onclick="clo2()">Cancel</button>
    </form>
</div>
</div>
</div>


<div id="myTModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="tclose">&times;</span>
      <h2>Edit credentials</h2><br>
	  <p>Credentials also appear on answers you write.</p>
	  <hr>
    </div>
    <div class="modal-body">
	<form action="locinsert.php" method="GET">
      <h4>Add a location credential</h4><br>
	  <table>
	  <tr>
	     <td>Location (required)</td>
		 <td><input type="text" name="location" placeholder="Vasai" maxlength="50" size="60" /></td>
	  </tr>
	
	  <tr>
	     <td>Start Year</td>
		 <td><input type="number" name="startyearl" min="1900" max="2099" step="1" value="2016"/></td>
	  </tr>
	  
	  <tr>
	     <td>End Year</td>
		 <td><input type="number" name="endyearl" min="1900" max="2099" step="1" value="2016"/></td>
	  </tr>
	  <tr>
	  	
	  </tr>
	  </table>
	  <input type="submit" class="button button1" id="lsub" value="Submit">
	    <button id="can" class="button button1" onclick="clo3()">Cancel<button>
    </form>
</div>
</div>
</div>

<div id="myPhotoModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="pclose">&times;</span>
      <br>
      <h2 id="upl">Upload Your Photo</h2><br>
	  <hr>
    </div>
    <div class="modal-body">
     <div id="choosefile">
	    <form method="POST" enctype="multipart/form-data">
         <input type="file" name="file">
         <button type="submit" name="uploadp" id="bu">UPLOAD</button>
        </form>
        <?php
                 if(isset($_POST['uploadp']))
                 {

                 	if(getimagesize($_FILES['file']['tmp_name'])== FALSE)
                 	{
                 		echo "Please select an image.";
                 	}
                 	else
                 	{
                        $image= addslashes($_FILES['file']['tmp_name']);
                        $name= addslashes($_FILES['file']['name']);
                        $image= file_get_contents($image);
                        $image= base64_encode($image);
                        saveimage($name,$image);
                           
                 	}
                 }
                 function saveimage($name,$image)
                 {
                         $servername = "localhost";
                         $username = "root";
                         $dbname = "quest";
                         // Create connection
                         $conn = new mysqli($servername, $username,"", $dbname);

                         $a=$_SESSION['uid'];
                         $sql = "INSERT INTO profileinfo (uid,name,image) VALUES ($a,'$name','$image')";

                         $result=mysqli_query($conn,$sql);
                          echo "<script>var a=document.getElementById('addp'); a.style.display='none';</script>";
                 }


        ?>
     </div>
</div>
</div>
</div>

<script>

    
    
	document.getElementById("un").innerHTML = "<?php echo $user; ?>";


 <?php

    $servername = "localhost";
    $username = "root";
    $dbname = "quest";

    // Create connection
    $conn = new mysqli($servername, $username,"", $dbname);

    $sql ="SELECT * FROM descri where uid = '$a'";
    $result=mysqli_query($conn,$sql);
    $row= mysqli_fetch_assoc($result);
    ?>
    document.getElementById('de').innerHTML = "<?php echo $row['description'] ?>";

    document.getElementById("ques").onclick= function(){

    	document.getElementById("di").innerHTML = "Questions";
    }

    document.getElementById("answ").onclick = function(){

    	document.getElementById("di").innerHTML = "Answers";
    }
    
    document.getElementById("acti").onclick = function(){

    	document.getElementById("di").innerHTML = "Activity";
    }

    document.getElementById("topi").onclick = function(){

    	document.getElementById("di").innerHTML = "Topics";
    }
    
    $('#answ').click(function() 
    {
    $('#quedisplay').hide();
    $('#ansdisplay').show();
    });


     $('#ques').click(function() 
     {
    $('#quedisplay').show();
    $('#ansdisplay').hide();
     });

       $('#acti').click(function() 
    {
    $('#quedisplay').hide();
    $('#ansdisplay').hide();
    });


     $('#topi').click(function() 
     {
    $('#quedisplay').hide();
    $('#ansdisplay').hide();
     });


	 function edit() {
        var div=document.getElementById("un");
        div.innerHTML='<input type="text" id="usa" name= "change" maxlength="24" >';
        var input = document.getElementById("usa");
     
    console.log(input);
    input.addEventListener("keyup", function(event) {
        console.log(event.keyCode)
    if (event.keyCode === 13) {
        event.preventDefault();
    
        var div=document.getElementById("un");
        var name=input.value
        div.innerHTML='<span>'+name+'<span>';
        
    }   
});
 
   url('updateinfo.php');
    }



    function editd() {
        var div=document.getElementById("descbox");

        div.innerHTML='<textarea rows="5" cols="70" class="descsty" id="usaa" name="description"></textarea>';
        var input = document.getElementById("usaa");
        
    console.log(input);

    input.addEventListener("keyup", function(event) {
        console.log(event.keyCode)
    if (event.keyCode === 13) {
        event.preventDefault();
    
        var div=document.getElementById("descbox");
        var name=input.value
        div.innerHTML='<span id="de">'+name+'<span>';
        document.getElementById("adddesc").innerHTML='Write a  new description about yourself';
         window.location.href='updatedesc.php?descri='+name;
    }

});
    }
   
     function clo() {
     	   fmodal.style.display = "none";

     }
     
     function clo2() {
     	   smodal.style.display = "none";

     }

     function clo3() {
     	   tmodal.style.display = "none";

     }
    

// Get the modal
var fmodal = document.getElementById('myFModal');
var smodal = document.getElementById('mySModal');
var tmodal = document.getElementById('myTModal');
var pmodal = document.getElementById('myPhotoModal');

// Get the button that opens the modal
var fbtn = document.getElementById("bt");
var sbtn = document.getElementById("bta");
var tbtn = document.getElementById("btab");
var pbtn = document.getElementById("addp");

// Get the <span> element that closes the modal
var fspan = document.getElementsByClassName("fclose")[0];
var sspan = document.getElementsByClassName("sclose")[0];
var tspan = document.getElementsByClassName("tclose")[0];
var pspan = document.getElementsByClassName("pclose")[0];



// When the user clicks the button, open the modal 
fbtn.onclick = function() {
    fmodal.style.display = "block";
}

sbtn.onclick = function() {
   smodal.style.display = "block";
}

tbtn.onclick = function() {
   tmodal.style.display = "block";
}

pbtn.onclick = function() {
   pmodal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
fspan.onclick = function() {
    fmodal.style.display = "none";
}

sspan.onclick = function() {
    smodal.style.display = "none";
}

tspan.onclick = function() {
    tmodal.style.display = "none";
}

pspan.onclick = function() {
    pmodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        fmodal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == smodal) {
        smodal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == tmodal) {
        tmodal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == pmodal) {
        pmodal.style.display = "none";
    }
}


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

</body>

</html>