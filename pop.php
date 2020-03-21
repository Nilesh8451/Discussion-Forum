<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>



$(document).ready(function(){
	var qu= document.getElementById('q');



qu.onclick=function(){
	var s=$( "#slct option:selected" ).text();
	var t= document.getElementById("ta").value;
	 var c= $( "input:checked" ).val();
	 var s1=s;
	 window.location.href ='q.php?cat=' +s1+"&ques="+t+"&post="+c;	

};
})

</script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}

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
</style>
</head>
<body>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Ask a question...</h2>
    </div>
  
    <div class="modal-body">
<form>
 
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
      <option value="1">Programming</option>
      <option value="2">Science</option>
      <option value="3">Books</option>
	  <option value="4">Economics</option>
	  <option value="5">Movies</option>
	  <option value="6">Music</option>
	  <option value="7">Sports</option>
	  <option value="8">Gaming</option>
	  <option value="9">Food</option>
	  <option value="10">Travelling</option>
    </select>
  </div>
<textarea class='autoExpand' rows='2' data-min-rows='2' id="ta"placeholder='Start your question with "What", "How", "Why", etc.'></textarea><br>

 <div class="ch">Post :            <input type="checkbox" name="posted" value="open"> To all
  <input type="checkbox" name="posted" value="group" checked> To group<br></div>
</div>

    </div>
    
      <input type="button" class="button button1" id="q" value="Post">
    
  </div>

</div>

<script>

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

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
</script>

</body>
</html>
