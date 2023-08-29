<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  
<?php require_once('link.php');?>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Set a style for all buttons */
.gww-gww-txt-btn {
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.gww-gww-txt-btn:hover {
  opacity:1;
}

/* Float gww-txt-cancel-btn and delete buttons and add an equal width */
.gww-delete-gww-txt-btn, .gww-gww-txt-cancel-btn-gww-txt-btn {
  float: left;
  width: 50%;
}

/* Add a color to the gww-txt-cancel-btn button */
.gww-delete-gww-txt-btn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.gww-gww-txt-cancel-btn-gww-txt-btn {
  background-color: black;
  color:red;
  font-weight:bolder;
}

/* Add padding and center-align text to the gww-container */
.gww-container {
  padding: 16px;
  text-align: center;
}

/* The gwwPopUp1 (background) */
.gwwPopUp1 {
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-image: linear-gradient(rgb(4,9,30,0.7),rgb(4,9,30,0.7));
  padding-top: 50px;
  animation: fadeIn 4s;
  -webkit-animation: fadeIn 4s;  
}

/* gwwPopUp1 Content/Box */
.gwwPopUp1-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 2px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The gwwPopUp1 gww-close Button (x) */
.gww-close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: red;
}

.gww-close:hover,
.gww-close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.gww-clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for gww-txt-cancel-btn button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .gww-delete-gww-txt-btn, .gww-gww-txt-cancel-btn-gww-txt-btn {
     width: 100%;
  }
}

.web-helper{
            position: fixed;
            left: -1.5%;
            bottom: 8%;
            width: 100%;
            background-color: transparent;
            color: red;
            text-align: right;
            margin-right:100px;
            font-size:50px;
            cursor: pointer;
          }
          * {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.gww-txt-open {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup chat - hidden by default */
.gww-txt-chat {
  display: none;
  position: fixed;
  bottom: 17%;
  right: 20px;
  border: 3px solid #f1f1f1;
  z-index: 9;
  animation: fadeIn 4s;
  -webkit-animation: fadeIn 4s;
  color : white;


}

/* Add styles to the form container */
.gww-txt-container {
  max-width: 300px;
  padding: 10px;
  background-image: linear-gradient(rgb(4,9,30,0.7),rgb(12, 13, 14));
  color : white;
}




/* Set a style for the submit/send button */
.gww-txt-container .gww-txt-btn {
  padding: 6px 15px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}
.go-live-gww-txt-btn{

    background-color:black;
    color:red;
    font-weight:bolder;
}
.go-live-gww-txt-btn2{

background-color:black;
color:white;
font-weight:bolder;
}
/* Add a red background color to the gww-txt-cancel-btn button */
.gww-txt-container .gww-txt-cancel-btn {
  background-color: #ccc;
  color: black;
}

/* Add some hover effects to buttons */
.gww-txt-container .gww-txt-btn:hover, .gww-txt-open:hover {
  opacity: 1;
}
/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>
</head>

<body onload="gwwtxt()">

<?php
date_default_timezone_set("Africa/Tunis");
$t = date("l");

if ($t == "Sunday") {

echo "<div id='gwwid01' class='gwwPopUp1  gwwPopDn1'>";


echo '<span onclick="';
echo  "document.getElementById('gwwid01').style.display='none', reply1(), ms1()";
echo'" class="gww-close""'; 
echo ">×</span>";


echo "
  <form class='gwwPopUp1-content'>
    <div class='gww-container'>
      <h2>We Are Live </h2>
      <b><p>Join Our Live Sunday Service</p></b>
      <p> By Clicking The Go To Live Button Now</p>
    
      <div class='gww-clearfix'>";
      

echo '<button type="button" id="gww-close" onclick="';
echo  "document.getElementById('gwwid01').style.display='none', reply1(), ms1()";
echo'" class="gww-delete-gww-txt-btn gww-gww-txt-btn""'; 
echo ">Not Now</button>";


echo '<button type="button" id="gww-close" onclick="golive()"';
echo 'class="gww-delete-gww-txt-btn gww-gww-txt-btn"" style = " Background-color:black;color:red;"'; 
echo '>Go To Live  <b><span style="color: rgb(255, 0, 0); text-align: center; font-weight:bolder;"z>&#9974</span></b> </button>';
      
        
        
 echo"</div>
    </div>
  </form>
</div>";

echo '<div  onclick="';
echo  "document.getElementById('gww-reply-1').style.display='none', reply2(), ms2()";
echo'" class="gww-close22 web-helper"'; 
echo '><i class="fa-sharp fa-solid fa-user-tie fa-bounce"></i>
</div>';
echo '<div class="gww-txt-chat" id="gww-reply-1">
<div class="gww-txt-container">
  <h2><span style="color:#62dfe5">G</span> <span style="color: white; font-family :"GeoSlab703 Md BT";">Bot</span></h2>

  <p id="gww-auto-txt-1" style="font-weight: bolder; color:white;"></p>
     
  <button type="button" onclick="golive()" class="gww-txt-btn go-live-gww-txt-btn">Go To Live  <b><span style="color: rgb(255, 0, 0); text-align: center;" class="live_button">&#9974</span></b></button>
  <button type="button" class="gww-txt-btn gww-txt-cancel-btn" onclick="closeReply()">Close</button>
</div>
</div>';


echo '<div class="gww-txt-chat" id="gww-reply-2">
<div class="gww-txt-container">
  <h2><span style="color:#62dfe5">G</span> <span style="color: white; font-family :"GeoSlab703 Md BT";">Bot</span></h2>

  <p id="gww-auto-txt-2" style="font-weight: bolder; color:white;"></p>
     
  <button type="button" onclick="golive()" class="gww-txt-btn go-live-gww-txt-btn"><b> Go To Live <b><span style="color: rgb(255, 0, 0); text-align: center;" class="live_button">&#9974</span></b></b></button>
  <button type="button" onclick="blog()" class="gww-txt-btn go-live-gww-txt-btn2" ><b> Blog </b></button>
  <button type="button" onclick="sundayService()" class="gww-txt-btn go-live-gww-txt-btn2"><b> Sunday Service </b></button>
  <button type="button" onclick="announcement()" class="gww-txt-btn go-live-gww-txt-btn2"><b> Announcement </b></button>
  <button type="button" class="gww-txt-btn gww-txt-cancel-btn" onclick="closeReply2() , reply3(), ms3()"> Close </button>
</div>
</div>';


echo '<div class="gww-txt-chat" id="gww-reply-3">
<div class="gww-txt-container">
  <h1><span style="color:#62dfe5">G</span> <span style="color: white; font-family :"GeoSlab703 Md BT";">Bot</span></h1>

  <p id="gww-auto-txt-3" style="font-weight: bolder; color:white;"></p>
     
  <button type="button" class="gww-txt-btn go-live-gww-txt-btn" onclick="closeReply3() , reply2(), ms2()"><b><span style="color: rgb(255, 0, 0); text-align: center;" class="live_button">Back</span></b></button>
  <button type="button" class="gww-txt-btn gww-txt-cancel-btn" onclick="closeReply3()">OK</button>
</div>
</div>';

} 
elseif ($t == "Tuesday") {

  echo "<div id='gwwid01' class='gwwPopUp1  gwwPopDn1'>";


  echo '<span onclick="';
  echo  "document.getElementById('gwwid01').style.display='none', reply1(), ms4()";
  echo'" class="gww-close""'; 
  echo ">×</span>";
  
  
  echo "
    <form class='gwwPopUp1-content'>
      <div class='gww-container'>
        <h2>Dont Miss Out !!!</h2>
        <b><p>On Our Word Alive Tuesday Bible Class </p></b>
        <p> Join Todays Teaching By Clicking The Button Below </p>
      
        <div class='gww-clearfix'>";
        
  
  echo '<button type="button" id="gww-close" onclick="';
  echo  "document.getElementById('gwwid01').style.display='none', reply1(), ms4()";
  echo'" class="gww-delete-gww-txt-btn gww-gww-txt-btn""'; 
  echo "><b>Not Now</b> </button>";
  
  
  echo '<button type="button" id="gww-close" onclick="tuesdayClass()"';
  echo 'class="gww-delete-gww-txt-btn gww-gww-txt-btn"" style = " Background-color:black;color:red;"'; 
  echo '> Bible Class </button>';
        
          
          
   echo"</div>
      </div>
    </form>
  </div>";
  
  echo '<div  onclick="';
  echo  "document.getElementById('gww-reply-1').style.display='none', reply2(), ms5()";
  echo'" class="gww-close22 web-helper"'; 
  echo '><i class="fa-sharp fa-solid fa-user-tie fa-bounce"></i>
  </div>';
  echo '<div class="gww-txt-chat" id="gww-reply-1">
  <div class="gww-txt-container">
    <h1><span style="color:#62dfe5">G</span> <span style="color: white; font-family :"GeoSlab703 Md BT";">Bot</span></h1>
  
    <p id="gww-auto-txt-4" style="font-weight: bolder; color:white;"></p>
       
    <button type="button" onclick="tuesdayClass()" class="gww-txt-btn go-live-gww-txt-btn">Bible Class</button>
    <button type="button" class="gww-txt-btn gww-txt-cancel-btn" onclick="closeReply()">Close</button>
  </div>
  </div>';
  
  
  echo '<div class="gww-txt-chat" id="gww-reply-2">
  <div class="gww-txt-container">
    <h1><span style="color:#62dfe5">G</span> <span style="color: white; font-family :"GeoSlab703 Md BT";">Bot</span></h1>
  
    <p id="gww-auto-txt-5" style="font-weight: bolder; color:white;"></p>

    <button type="button" onclick="tuesdayClass()" class="gww-txt-btn go-live-gww-txt-btn2"> <b> Bible Class </b></button>
    <button type="button" onclick="blog()" class="gww-txt-btn go-live-gww-txt-btn2" ><b> Blog </b></button>
    <button type="button" onclick="sundayService()" class="gww-txt-btn go-live-gww-txt-btn2" ><b> Sunday Service </b></button>
    <button type="button" onclick="announcement()" class="gww-txt-btn go-live-gww-txt-btn2"><b> Announcement </b></button>
    <button type="button" class="gww-txt-btn gww-txt-cancel-btn" onclick="closeReply2() , reply3(), ms3()">Close</button>
  </div>
  </div>';
  
  
  echo '<div class="gww-txt-chat" id="gww-reply-3">
  <div class="gww-txt-container">
    <h1><span style="color:#62dfe5">G</span> <span style="color: white; font-family :"GeoSlab703 Md BT";">Bot</span></h1>
  
    <p id="gww-auto-txt-3" style="font-weight: bolder; color:white;"></p>
       
    <button type="button" class="gww-txt-btn go-live-gww-txt-btn" onclick="closeReply3() , reply2(), ms5()"><b><span style="color: rgb(255, 0, 0); text-align: center;" class="live_button">Back</span></b></button>
    <button type="button" class="gww-txt-btn gww-txt-cancel-btn" onclick="closeReply3()">OK</button>
  </div>
  </div>';
  
  } 
else {
echo '<div onclick="';
echo  "document.getElementById('gwwid01').style.display='block'";
echo'" class="gww-close22""'; 
echo '><div class="web-helper"><i class="fa-sharp fa-solid fa-user-tie fa-bounce"></i>
</div></div>';
}
?>


<script>
// Get the gwwPopUp1
var gwwPopUp1 = document.getElementById('gwwid01');

// When the user clicks anywhere outside of the gwwPopUp1, gww-close it
window.onclick = function(event) {
  if (event.target == gwwPopUp1) {
    gwwPopUp1.style.display = "none";
  }
}
gww-close.onclick = function(event) {
  if (event.target == gwwPopUp1) {
    gwwPopUp1.style.display = "none";
  }
}
</script>


</script>
              <script>window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".gwwPopUp1").style.display = "block";
        },
        18000
    )
});
</script>
<script>window.addEventListener("load", function(){
    setTimeout(
        function close(event){
            document.querySelector(".gwwPopUp1").style.display = "none";
        },
        0
    )
});
</script> 
<script>window.addEventListener("load", function(){
    setTimeout(
        function close(event){
            document.querySelector(".gwwPopDn1").style.display = "none";
        },
        120000
    )
});
</script> 

<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>



<?php require_once('js-redirect.php');?>
















<script>
     var i =  0;
     var txt = '.     Hey !, Am GodAA Web Bot Or You Can Call Me G Bot, Am Your Web Worker, Click Me If You Need Any Assistance, Am Always Happy To Help, Dont Forget To Check Out Our Live Stream.Thanks.';
     var speed = 70;
     
     function ms1() {
       if (i < txt.length) {
         document.getElementById("gww-auto-txt-1").innerHTML += txt.charAt(i);
         i++;
         setTimeout(ms1, speed);
       }
     }
</script>
<script>
function reply1() {
  document.getElementById("gww-reply-1").style.display = "block";
}

function closeReply() {
  document.getElementById("gww-reply-1").style.display = "none";
}
</script>



<script>
     var i2 =  0;
     var txt2 = 'We Are Streaming Our Sunday Service Live Wanna Check It Out ?, Or You Check Out Our Blog, Sunday Service Just By Click The Button Below, We Also Have New Announcements Do You Wanna Check It Out Too ???';
     var speed2 = 70;
     
     function ms2() {
       if (i2 < txt2.length) {
         document.getElementById("gww-auto-txt-2").innerHTML += txt2.charAt(i2);
         i2++;
         setTimeout(ms2, speed2);
       }
     }
</script>
<script>
function reply2() {
  document.getElementById("gww-reply-2").style.display = "block";
}

function closeReply2() {
  document.getElementById("gww-reply-2").style.display = "none";
}
</script>




<script>
     var i3 =  0;
     var txt3 = 'Click On Me If You Need Any Help, Am Here To Help, Thanks.';
     var speed3 = 70;
     
     function ms3() {
       if (i3 < txt3.length) {
         document.getElementById("gww-auto-txt-3").innerHTML += txt3.charAt(i3);
         i3++;
         setTimeout(ms3, speed3);
       }
     }
</script>
<script>
function reply3() {
  document.getElementById("gww-reply-3").style.display = "block";
}

function closeReply3() {
  document.getElementById("gww-reply-3").style.display = "none";
}
</script>







<script>
     var i4 =  0;
     var txt4 = '.      Hey !, Am GodAA Web Bot Or You Can Call Me G Bot, Am Your Web Worker, Click Me If You Need Any Assistance, Am Always Happy To Help, Dont Forget To Check Out Our Tuesday Bible Class.Thanks.';
     var speed4 = 70;
     
     function ms4() {
       if (i4 < txt4.length) {
         document.getElementById("gww-auto-txt-4").innerHTML += txt4.charAt(i4);
         i4++;
         setTimeout(ms4, speed4);
       }
     }
</script>



<script>
     var i5 =  0;
     var txt5 = 'Today Is Tuesday Check Out Our Tuesday Bible Class, Or You Check Out Our Blog, Sunday Service Just By Click The Button Below, We Also Have New Announcements Do You Wanna Check It Out Too ???';
     var speed5 = 70;
     
     function ms5() {
       if (i5 < txt5.length) {
         document.getElementById("gww-auto-txt-5").innerHTML += txt5.charAt(i5);
         i5++;
         setTimeout(ms5, speed5);
       }
     }
</script>











</body>
</html>