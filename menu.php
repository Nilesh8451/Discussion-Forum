<html>

<head>
	<title>Main Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<style>
	
.show {display: block;}
</style>
<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    border-radius: 20px;
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 40%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: rgba(235, 0, 0, .78);
    color: white;
    border-top-left-radius: 20px;
	border-top-right-radius: 20px;
	
}

.modal-body {padding: 2px 16px;}

.button {
    background-color: rgba(235, 0, 0, .78); /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.center-on-page {
  position: relative;
 
}
h1 {
  text-align: center;
}
/* Reset Select */
select {
  
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: rgba(235, 0, 0, .78);
  background-image: none;
  
}
/* Custom Select */
.select {
  position: relative;
  display: block;
  width: 20em;
  height: 3em;
  line-height: 3;
  background: rgba(235, 0, 0, .78);
  overflow: hidden;
  border-radius: .25em;
  
}
select {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0 0 0 .5em;
  color: #fff;
  cursor: pointer;
  
}
select::-ms-expand {
  display: none;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background:  rgba(235, 0, 0, .78);
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color:black;
}
.select::after {
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}
.first_question_prompt {
    border-radius: 4px;
    border: 1px solid #e2e2e2;
    padding: 8px;
    margin-bottom: 16px;
    background: #f9f9f9;
	position:relative;
}

textarea{  
  display: block;
  box-sizing: padding-box;
  overflow: hidden;

  padding: 10px;
  width: 100%;
  font-size: 20px;
  margin: 50px auto;
  
  box-shadow: 2px 2px 8px rgba(black, .3);
 
      border-radius: 10px;
    border: 6px solid rgba(235, 0, 0, .78) ;

}
.label-danger {
    background-color: #d9534f;
}
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
</style></style>
</head>

<body>
	<header>
		<nav id="header" class="nav">
			<div id="logostyle">
				<img src="Logo.jpg" id="logotag"><img>
			</div>
			<div id="menustyle">
				<div id="menustyle1">
					<li id="menu"><a href="homepage.php" id="m"><i class="fa fa-home"></i> Home</a></li>
				</div>
				<div id="menustyle1">
					<li id="menu"><a href="write1.php" id="m"><i class="fa fa-pencil"></i> Write</a></li>
					
				</div> 
				
				<div id="menustyle1">
					
<li id="menu">
<a onclick="myFunction()" class="dropbtn" id="m"><i class="fa fa-bell"></i>Notifications</a>
  <div id="myDropdown" class="dropdown-content">
   
<?php


    
$a=$_SESSION['username'];
    $sql="SELECT * FROM notification WHERE qid in (SELECT qid from questions WHERE author='$a');" ;
    $result=mysqli_query($db,$sql);
    $qresults=mysqli_num_rows($result);
    if($qresults>0)
    {
        while($row = mysqli_fetch_assoc($result))
        { $a="set";
		$abc="SELECT * FROM questions WHERE qid='$row[qid]'" ;
		 $result1=mysqli_query($db,$abc);
		 $row1 = mysqli_fetch_assoc($result1);
		$b=$row1['area'];
		if($b!='open')
		{
		
           echo '<a href="question.php?question='.$row["qid"].'&a='.$a.'">'.$row['writer'].' has answered your question which you asked in group  ('.$b.')</a><br>';
        }
		else{
			  echo '<a href="question.php?question='.$row["qid"].'&a='.$a.'">'.$row['writer'].' has answered your question</a><br>';
		}
		}
     }
     else
     { echo 'no new notifications';
     }

    

?>
  </div>

					</li>
				</div>
			</div>
			<div id="searchstyle">
				<li id="menu"><input type="text" placeholder="Search Quest" id='search' class="search"/>
					<div class=dropdown-content id='result'>
						
					  </div>
				</li>
			</div>
			<div id="profilestyle">
				<li id="menu"><a href="#" id="p">Profile</a>
					<div class="dropdown-content" >
							<a href="logout.php">Log out</a>
							<a href="profilepage.php">You</a>
						  </div>
				
				</li>
			</div>
			<div id="buttonstyle">
				<button id="q">Add Question</button>
			</div>

		</nav>





		</div>


	</header>
	



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Ask a question...</h2>
    </div>
  
    <div class="modal-body">

 
   <div class="center-on-page">

  
  <div class="first_question_prompt">
  
  <p>How to quickly get a good answer:</p>
  <ul class="tip_list">
  <li>Keep your question short and to the point</li>
  <li>Check for grammar or spelling errors</li>
  <li>Phrase it like a question</li>
  <li>Make sure it hasn't been asked before</li>
  </ul><br>
 <div class="select"style="margin-left:  90px">
  
    <select name="slct" id="slct">
      <option>Choose category of question</option>
      <option value="1">programming</option>
      <option value="2">science</option>
      <option value="3">books</option>
	  <option value="4">economics</option>
	  <option value="5">movies</option>
	  <option value="6">music</option>
	  <option value="7">sports</option>
	  <option value="8">gaming</option>
	  <option value="9">food</option>
	  <option value="10">travelling</option>
    </select>
  </div>
<textarea class='autoExpand' rows='2' data-min-rows='2' id="ta"placeholder='Start your question with "What", "How", "Why", etc.'></textarea><br>

 <div class="ch">Post :            <input type="checkbox" name="posted" value="open"> To all
  <input type="checkbox" name="posted" value="group" checked> To group<br></div>
</div>

    </div>
    
      <input type="button" class="button button1" id="q1" value="Post">
    
  </div>

</div>

<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("q");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
$(document)
    .one('focus.autoExpand', 'textarea.autoExpand', function(){
        var savedValue = this.value;
        this.value = '';
        this.baseScrollHeight = this.scrollHeight;
        this.value = savedValue;
    })
    .on('input.autoExpand', 'textarea.autoExpand', function(){
        var minRows = this.getAttribute('data-min-rows')|0, rows;
        this.rows = minRows;
        rows = Math.ceil((this.scrollHeight - this.baseScrollHeight) / 16);
        this.rows = minRows + rows;
    });
		var qu= document.getElementById('q1');



qu.onclick=function(){
	var s=$( "#slct option:selected" ).text();
	var t= document.getElementById("ta").value;
	 var c= $( "input:checked" ).val();
	 var s1=s;
	 window.location.href ='q.php?cat=' +s1+"&ques="+t+"&post="+c;	
	 };
</script>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>

<script>

	$(document).ready(function(){
		$("#search").keyup(function(){
			var name=$("#search").val();
			$.post("search.php",{suggest:name},function(data,status){
				$("#result").css("display","block");
				$("#result").html(data);
				console.log(data);
			});
		});
		
	});
</script>

