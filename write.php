<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script type="text/javascript" src="jquery-3.3.1.js"></script>
    <link rel="stylesheet" type="text/css" href="profilestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Timmana" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu|Ubuntu+Condensed|Ubuntu+Mono" rel="stylesheet">
    <link rel="stylesheet" href="/css/style2 (1).css">
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
      /*  background-color: yellow;  */
    }


    .main {
        float: left;
        position: absolute;
        left: 25%;
        width: 50%;
        background-color: #FAFAFA;
      /*  background-color: aqua;  */
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

  #writeans{
    display: none;
  	width:100%;
  	height:250px;
  /*	background-color:aqua; */ 
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
</style>

<body>
    <div class="menu">
        <header>
            <nav id="header" class="nav">
                <div id="logostyle">
                    <img src="Logo.jpg" id="logotag"><img>
                </div>
                <div id="menustyle">
                    <div id="menustyle1">
                        <li id="menu"><a href="#" id="m"><i class="fa fa-home"></i> Home</a></li>
                    </div>
                    <div id="menustyle1">
                        <li id="menu"><a href="#" id="m"><i class="fa fa-pencil"></i> Write</a></li>
                    </div>
                    <div id="menustyle1">
                        <li id="menu"><a href="#" id="m"><i class="fa fa-bell"></i> Notification</a></li>
                    </div>
                </div>
                <div id="searchstyle">
                    <li id="menu"><input type="text" placeholder="Search Quest" class="search"></li>
                </div>
                <div id="profilestyle">
                        <li id="menu"><a href="#" id="p">Profile</a>
                            <div class="dropdown-content">
                                    <a href="#">Link 1</a>
                                    <a href="#">Link 2</a>
                                    <a href="#">Link 3</a>
                                  </div>
                        
                        </li>
                    </div>
                <div id="buttonstyle">
                    <button id="q">Add Question</button>
                </div>

            </nav>




    </div>

    </header>
    </div>
    <div class="feeds">
        <h3>Feeds</h3><hr>
        <ul>
            <li>Top Stories</li>
            <li>Bookmarked Answers</li>
            <li>Topics
                <ul>
                    <li>Computer</li>
                    <li>Movies</li>
                </ul>
            </li>

        </ul>


    </div>
    <div class="main">
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
               <a href="#" class="actionbar pass" id="1closediv"><i class="fas fa-pencil-ruler" id="icon"></i> Pass</a>
               </div>
             </div>	
             <div id="writeans">
           <form id='answer' action="write.php">
            
             	<textarea rows="5" cols="70" class="descsty" maxlength="1000" placeholder="Write your answer here..."></textarea>
            
             <div id="subbut">
                   <div id="butt">
                     <input type="submit" name="Submit" >
                   </div>
             </div>
             </div>
            </form>

        </div>
       
        


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
