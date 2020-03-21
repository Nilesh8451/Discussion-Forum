
<!-- saved from url=(0043)file:///C:/Users/hpp/Desktop/wdl/popup.html -->

<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>



$(document).ready(function(){

    $(".overlay").click(function(){
        if($(this).css("opacity")==1)
		{
		$(this).css("opacity","0");
		$(this).attr("value","0");
		
    




		}
		else
		{$(this).css("opacity","1");
			$(this).attr("value","1");
	

		}
	
    });
	
});</script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
 /*   background-image: url("background.png");/* Hidden by default */
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
#progressbar {
  background-color: white;
  border-radius: 13px;
  /* (height of inner div) / 2 + padding */
  padding: 3px;
}

#progressbar>div {
  background-color: rgba(235, 0, 0, 0.78);
  width: 0%;
  /* Adjust with JavaScript */
  height: 20px;
  border-radius: 10px;
}
.overlay:hover{
	opacity:0.9;
	color: #cd6302;
}
.mod{
 /*background-image: url("background.png");*/
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 60px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

.mod1{
/* background-image: url("background.png"); */
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 60px; /* Location of the box */
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
    position: relative;
    background-color: white;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 67%;
	
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
	
}
/* Modal Content */
.modal-content1{
    position: relative;
    background-color: white;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 67%;
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
}// Grid
.close:hover,
.close:focus {
    
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: rgba(30, 2, 2, 0.05);
    color: white;
	top:60px;
	
}
.modal-header:hover {
    outline: none;
  color: #FD9638;
}
.modal-body {padding: 2px 16px;

height:360px}


.modal-body1{

height:400px}

.modal-footer {
    padding: 2px 16px;
    background-color: rgba(30, 2, 2, 0.05);
    color: white;
}
.button {
    background-color:  rgba(235, 0, 0, 0.78); /* Green */
    border: none;
    color: white;
    padding: 15px ;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
	
}
.cat{
	background: white; outline: none; border: 0 none;
	font: inherit; text-align: left; color: hsl(120, 40%, 30%);
	display: block; width: 150;height:150; 
	box-sizing: border-box;float:left;
	position:relative;
	margin:10px;
	
}
.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.overlay {
  position: absolute;

  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
 opacity:0;
  transition: .5s ease;
  background-color: rgba(235, 0, 0, 0.78);
}





.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
h1{
	color: rgba(235, 0, 0, 0.78);
	font-size:30px;
}

</style>
	
</head>
<body >

<div >

<!-- The Modal -->
<div id="myModal" class="modal" style="display: block;">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
 
      <h1 align=center>What are your Interests?</h1>
	  <div id="progressbar">
  <div style=" width: 0%;"></div>
</div><br>
    </div>
    <div class="modal-body">
   
<div class="cat"> <img class="topic_photo_img" src="coding.jpg" height="150" width="150"> <div class="overlay" id="i1" value="0">
    <div class="text">Programming</div>
  </div></div>

<div class="cat"> <img class="topic_photo_img" src="science.jpg" height="150" width="150"> <div class="overlay" id="i2"value="0">
    <div class="text">Science</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="books.jpg" height="150" width="150"> <div class="overlay" id="i3" value="0">
    <div class="text">Books</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="economics.jpg" height="150" width="150"> <div class="overlay" id="i4" value="0">
    <div class="text">Economics</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="movies.jpg" height="150" width="150"> <div class="overlay" id="i5" value="0">
    <div class="text">Movies</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="music.jpg" height="150" width="150"> <div class="overlay" id="i6" value="0">
    <div class="text">Music</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="sports.jpg" height="150" width="150"> <div class="overlay" id="i7" value="0">
    <div class="text">Sports</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="gaming.jpg" height="150" width="150"> <div class="overlay" id="i8" value="0">
    <div class="text">Gaming</div>
  </div></div>

<div class="cat"> <img class="topic_photo_img" src="food.jpg" height="150" width="150"> <div class="overlay" id="i9" value="0">
    <div class="text">Food</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="travel.jpg" height="150" width="150"> <div class="overlay" id="i10" value="0">
    <div class="text">Travelling</div>
  </div></div>



    </div>
    <div class="modal-footer">
	
      <input type="button" class="button button1" id="close"  value="proceed"style="margin-left:  770px" >
	
  </div>
  </div>

</div>
 

 
 

<!-- The Modal -->
<div id="myMod" class="mod" style="display: none;">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      
      <h1 align='center'>What are your Skills?</h1>
	  <div id="progressbar">
  <div style=" width: 33%;"></div>
</div><br>
    </div>
    <div class="modal-body">
 <div class="cat"> <img class="topic_photo_img" src="coding.jpg" height="150" width="150"> <div class="overlay" id="x1" value="0">
    <div class="text">Programming</div>
  </div></div>

<div class="cat"> <img class="topic_photo_img" src="science.jpg" height="150" width="150"> <div class="overlay" id="x2" value="0">
    <div class="text">Science</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="books.jpg" height="150" width="150"> <div class="overlay" id="x3" value="0">
    <div class="text">Books</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="economics.jpg" height="150" width="150"> <div class="overlay" id="x4" value="0">
    <div class="text">Economics</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="movies.jpg" height="150" width="150"> <div class="overlay" id="x5" value="0">
    <div class="text">Movies</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="music.jpg" height="150" width="150"> <div class="overlay" id="x6" value="0">
    <div class="text">Music</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="sports.jpg" height="150" width="150"> <div class="overlay" id="x7" value="0">
    <div class="text">Sports</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="gaming.jpg" height="150" width="150"> <div class="overlay" id="x8" value="0">
    <div class="text">Gaming</div>
  </div></div>

<div class="cat"> <img class="topic_photo_img" src="food.jpg" height="150" width="150"> <div class="overlay" id="x9" value="0">
    <div class="text">Food</div>
  </div></div>
<div class="cat"> <img class="topic_photo_img" src="travel.jpg" height="150" width="150"> <div class="overlay" id="x10" value="0">
    <div class="text">Travelling</div>
  </div></div>
 </div>
  <div class="modal-footer">

	  <input type="button" class="button button1" id="back"  value="Back" style="margin-right:  700px">
	   <input type="submit" class="button button1" id="pro"  value="Proceed"  >
   
	</div>
</div>
</div>
    <!-- The Modal -->
<div id="myMod1" class="mod1" style="display: none;">

  <!-- Modal content -->
  <div class="modal-content1">
    <div class="modal-header">
      
      <h1 align='center'>Some more details about You</h1>
	  <div id="progressbar">
  <div style=" width: 66%;"></div>
</div><br>
    </div>
    <div class="modal-body1">
	<section id="hire">
  
    
    <form>
	      <div class="field name-box">
		        <input type="text" id="resident" placeholder="Where do u live?"/>
        		<label for="resident">Resident</label>
		        <span class="ss-icon">check</span>
	      </div>
		   <div class="field name-box">
		        <input type="text" id="cname" placeholder="Where do u study?"/>
        		<label for="collegename"> College's Name</label>
		        <span class="ss-icon">check</span>
	      </div>
		 
		   <div class="field name-box">
		        <input type="text" id="course"placeholder="Which course do you study?"/>
        		<label for="course">Course</label>
		        <span class="ss-icon">check</span>
	      </div>
		   <div class="field name-box">
		        <input type="text" id="year"placeholder="You are in which year?"/>
        		<label for="year">Year</label>
		        <span class="ss-icon">check</span>
	      </div>

	   
  </form>
</section>
 </div>
  <div class="modal-footer">
      
	  <input type="button" class="button button1" id="b"  value="Back" style="margin-right: 650px">
	   <input type="button" class="button button1" id="c1" name="test" value="Submit"  >

    </div>
</div>

 

</div>
</div>
<style>body {
  background: #efefef;
  font-size: 62.5%;
  font-family: 'Lato', sans-serif;
  font-weight: 300;
  color: #B6B6B6;
}
body section {
  background: white;
 
  text-align: center;
  padding: 50px 80px 110px;
  width: 80%;
  max-width: 1100px;
}

form {
  
  margin: 0 auto;
}
form .field {
  width: 100%;
  position: relative;
  margin-bottom: 15px;
}
form .field label {
  text-transform: uppercase;
  position: absolute;
  top: 0;
  left: 0;
  background: rgba(235, 0, 0, 1);
  width: 100%;
  padding: 18px 0;
  font-size: 1.45em;
  letter-spacing: 0.075em;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field label + span {
  font-family: 'SSStandard';
  opacity: 0;
  color: white;
  display: block;
  position: absolute;
  top: 12px;
  left: 7%;
  font-size: 2.5em;
  text-shadow: 1px 2px 0 #cd6302;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type="text"],
form .field textarea {
  border: none;
  background: #E8E9EA;
  width: 100%;
  margin: 0;
  padding: 18px 0;
  padding-left: 19.5%;
  color: #313A3D;
  font-size: 1.4em;
  letter-spacing: 0.05em;
  text-transform: uppercase;
}
form .field input[type="text"]#msg,
form .field textarea#msg {
  height: 18px;
  resize: none;
  -webkit-transition: all 333ms ease-in-out;
  -moz-transition: all 333ms ease-in-out;
  -o-transition: all 333ms ease-in-out;
  -ms-transition: all 333ms ease-in-out;
  transition: all 333ms ease-in-out;
}
form .field input[type="text"]:focus, form .field input[type="text"].focused,
form .field textarea:focus,
form .field textarea.focused {
  outline: none;
}
form .field input[type="text"]:focus#msg, form .field input[type="text"].focused#msg,
form .field textarea:focus#msg,
form .field textarea.focused#msg {
  padding-bottom: 150px;
}
form .field input[type="text"]:focus + label, form .field input[type="text"].focused + label,
form .field textarea:focus + label,
form .field textarea.focused + label {
  width: 18%;
  background:  rgba(235, 0, 0, 0.78);
  color: #313A3D;
}
form .field input[type="text"].focused + label,
form .field textarea.focused + label {
  color: #FD9638;
}
form .field:hover label {
  width: 18%;
  background:  rgba(235, 0, 0, 0.78);
  color: white;
}

@mixin grid($column) {
	  width:(100% / 12) * $column;
	  margin:0 auto;
}

// Transition Ease
@mixin ease($time:333ms, $attr:all, $curve:ease-in-out) {
	  -webkit-transition: $attr $time $curve;
	  -moz-transition: $attr $time $curve;
	  -o-transition: $attr $time $curve;
	  -ms-transition: $attr $time $curve;
	  transition: $attr $time $curve;
}

//-- Lato --//
@mixin lato-1 {font-family: 'Lato', sans-serif; font-weight:100;}
@mixin lato-1-i {@include lato-1; font-style:italic;}

@mixin lato-3 {font-family: 'Lato', sans-serif; font-weight:300;}
@mixin lato-3-i {@include lato-3; font-style:italic;}

@mixin lato-4 {font-family: 'Lato', sans-serif; font-weight:400;}
@mixin lato-4-i {@include lato-4; font-style:italic;}

@mixin lato-7 {font-family: 'Lato', sans-serif; font-weight:700;}
@mixin lato-7-i {@include lato-7; font-style:italic;}

@mixin lato-9 {font-family: 'Lato', sans-serif; font-weight:900;}
@mixin lato-9-i {@include lato-9; font-style:italic;}


// Colors
$blue:#313A3D;
$orange:#FD9638;
$dark-orange:darken($orange, 20%);
$grey:#B6B6B6;
$light-grey:lighten($grey, 15%);

$background:#efefef;
$field-color:#E8E9EA;





body {
	  background:$background;
	  font-size:62.5%;
	  @include lato-3;
	  color:$grey;

  section {
	    background:white;
  
    border-top:15px solid $blue;
    text-align:center;
  	  padding:50px 0 110px;
    width:80%;
    max-width:1100px;
    
  
  }
}

// Form
form {
		  @include grid(7);

		  .field {
			    width:100%;
			    position:relative;
			    margin-bottom:15px;

    			$hover-label-width:18%;
			    $placeholder-bumper:1.5%;
			    $label-padding:18px;

    			// Label
			    label {
				      text-transform: uppercase;
				      position:absolute;
				      top:0;
				      left:0;
				      background:$blue;
				      width:100%;
				      padding:($label-padding + 0px) 0;
				      font-size: 1.45em;
				      letter-spacing: 0.075em;

				      @include ease(333ms);

				      // Checkmark
				      + span {
					        font-family: 'SSStandard';
					        opacity: 0;
					        color:white;
				        	display: block;
					        position:absolute;
					        top: 12px;
					        left: 7%;
					        font-size: 2.5em;
					        text-shadow:1px 2px 0 $dark-orange;

					        @include ease(333ms);
			      	}
			    }

    			// Fields
		    	input[type="text"],
			    textarea {
				      border:none;
				      background:$field-color;
				      width:100% - $hover-label-width - $placeholder-bumper;
				      margin:0;
				      padding:$label-padding 0;
				      padding-left:$hover-label-width + $placeholder-bumper;
				      color:$blue;
				      font-size: 1.4em;
				      letter-spacing: 0.05em;
				      text-transform: uppercase;

				      &#msg {
					        height: 25px;
					        resize: none;
					        @include ease(333ms);
				      }

      				// Focus and JS Toggle Class
				      &:focus,
				      &.focused {
					        outline:none;

        					&#msg {
						          padding-bottom:150px;
					        }

        					+ label {
						          width:$hover-label-width;
						          background:$orange;
						          color:$blue;
					        }
				      }

      				// JS Toggle Class
				      &.focused {
					        + label {
						          color: $orange;
					        }
				      }
			    }

    			// Field Hover
			    &:hover {
				      label {
					        width:$hover-label-width;
					        background:$blue;
					        color:white;
				      }
			    }
		  }

		
	}</style>
<script>
// Get the modal
var modal = document.getElementById('myModal');
var mod = document.getElementById('myMod');
// Get the button that opens the modal
var mod1 = document.getElementById('myMod1');


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 


var btn1 = document.getElementById("close");
var l1;
var l2;
var l3;
var l4;
var l5;
var l6;
var l7;
var l8;
var l9;
var l10;
var as;
var a;
btn1.onclick = function() {
l1=document.getElementById("i1").getAttribute("value");
l2=document.getElementById("i2").getAttribute("value");
l3=document.getElementById("i3").getAttribute("value");
l4=document.getElementById("i4").getAttribute("value");
l5=document.getElementById("i5").getAttribute("value");
l6=document.getElementById("i6").getAttribute("value");
l7=document.getElementById("i7").getAttribute("value");
l8=document.getElementById("i8").getAttribute("value");
l9=document.getElementById("i9").getAttribute("value");
l10=document.getElementById("i10").getAttribute("value");
 a=[l1,l2,l3,l4,l5,l6,l7,l8,l9,l10];


    mod.style.display = "block";
	modal.style.display="none";
	
	
}
var btn3 = document.getElementById("pro");
var la1;
var la2;
var la3;
var la4;
var la5;
var la6;
var la7;
var la8;
var la9;
var la10;

btn3.onclick = function() {
la1=document.getElementById("x1").getAttribute("value");
la2=document.getElementById("x2").getAttribute("value");
la3=document.getElementById("x3").getAttribute("value");
la4=document.getElementById("x4").getAttribute("value");
la5=document.getElementById("x5").getAttribute("value");
la6=document.getElementById("x6").getAttribute("value");
la7=document.getElementById("x7").getAttribute("value");
la8=document.getElementById("x8").getAttribute("value");
la9=document.getElementById("x9").getAttribute("value");
la10=document.getElementById("x10").getAttribute("value");
 as=[la1,la2,la3,la4,la5,la6,la7,la8,la9,la10];

mod1.style.display="block";
    mod.style.display = "none";
	
}
var btn2 = document.getElementById("back");

btn2.onclick = function() {
    modal.style.display = "block";
	mod.style.display="none";
}
var btn4 = document.getElementById("b");

btn4.onclick = function() {
mod.style.display="block";
    mod1.style.display = "none";
	
}

var btn5 = document.getElementById("c1");

btn5.onclick = function() {
var t1=document.getElementById("resident").value;
var t2=document.getElementById("cname").value;
var t3=document.getElementById("course").value;
var t4=document.getElementById("year").value;

window.location.href ='readtest.php?name=' +as+"&name1="+a+"&text1="+t1+"&text2="+t2+"&text3="+t3+"&text4="+t4;	
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
		 mod.style.display = "none";
    }
}
</script>



</body></html>