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
.gww-btn {
  color: white;
  padding: 14px 100px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.gww-btn:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.gww-delete-btn, .gww-cancel-btn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.gww-delete-btn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.gww-cancel-btn {
  background-color: black;
  color:red;
  font-weight:bolder;
}

/* Add padding and center-align text to the gww-container */
.gww-container {
  padding: 16px;
  text-align: center;
}

/* The gww-pop-up-1 (background) */
.gww-pop-up-1 {
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: transparent;
  padding-top: 50px;
}

/* gww-pop-up-1 Content/Box */
.gww-pop-up-1-content {
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
 
/* The gww-pop-up-1 gww-close Button (x) */
.gww-close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
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

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .gww-delete-btn, .gww-cancel-btn {
     width: 100%;
  }
}

.web-helper{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: transparent;
            color: red;
            text-align: right;
            margin-right:100px;
            font-size:50px;
            cursor: pointer;
          }
          
</style>
</head>

<body onload="gwwtxt()">

<?php
date_default_timezone_set("Africa/Tunis");
$t = date("l");

if ($t == "Monday") {

echo "<div id='id01' class='gww-pop-up-1  gww-pop-dn-1'>";


echo '<span onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="gww-close""'; 
echo ">×</span>";


echo "
  <form class='gww-pop-up-1-content'>
    <div class='gww-container'>
      <h2>We Are Live </h2>
      <b><p>Join Our Live Sunday Service</p></b>
      <p> By Clicking The Go To Live Button Now</p>
    
      <div class='gww-clearfix'>";
      

echo '<button type="button" id="gww-close" onclick="';
echo  "document.getElementById('id01').style.display='none',document.getElementById('test').style.display='none'";
echo'" class="gww-delete-btn gww-btn""'; 
echo ">Not Now</button>";


echo '<button type="button" id="gww-close" onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="gww-cancel-btn gww-btn""'; 
echo '>Go To Live  <b><span style="color: rgb(255, 0, 0); text-align: center;" class="live_button">&#9974</span></b> </button>';
      
        
        
 echo"</div>
    </div>
  </form>
</div>";

echo '<div onclick="';
echo  "document.getElementById('id01').style.display='block'";
echo'" class="gww-close22 web-helper""'; 
echo '><i class="fa-sharp fa-solid fa-user-tie fa-bounce"></i>
</div>';


} 
elseif ($t == "Tuesday") {

echo "<div id='id01' class='gww-pop-up-1'>";


echo '<span onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="gww-close ""'; 
echo ">×</span>";


echo "
  <form class='gww-pop-up-1-content' action='/action_page.php'>
    <div class='gww-container'>
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <div class='gww-clearfix'>";
      

echo '<button type="button" id="gww-close" onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="gww-delete-btn gww-btn""'; 
echo ">Cancel</button>";


echo '<button type="button" id="gww-close" onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="gww-delete-btn gww-btn""'; 
echo ">Delete</button>";

      
        
        
 echo"</div>
    </div>
  </form>
</div>";
echo '<div onclick="';
echo  "document.getElementById('id01').style.display='block'";
echo'" class="gww-close22""'; 
echo '><div class="web-helper"><i class="fa-sharp fa-solid fa-user-tie fa-bounce"></i>
</div></div>';
} else {
echo '<div onclick="';
echo  "document.getElementById('id01').style.display='block'";
echo'" class="gww-close22""'; 
echo '><div class="web-helper"><i class="fa-sharp fa-solid fa-user-tie fa-bounce"></i>
</div></div>';
}
?>
<h1 id="test">TEST</h1>


<script>
// Get the gww-pop-up-1
var gww-pop-up-1 = document.getElementById('id01');

// When the user clicks anywhere outside of the gww-pop-up-1, gww-close it
window.onclick = function(event) {
  if (event.target == gww-pop-up-1) {
    gww-pop-up-1.style.display = "none";
  }
}
gww-close.onclick = function(event) {
  if (event.target == gww-pop-up-1) {
    gww-pop-up-1.style.display = "none";
  }
}
</script>


</script>
              <script>window.addEventListener("load", function(){
    setTimeout(
        function open(event){
            document.querySelector(".gww-pop-up-1").style.display = "block";
        },
        3000
    )
});
</script>
<script>window.addEventListener("load", function(){
    setTimeout(
        function close(event){
            document.querySelector(".gww-pop-up-1").style.display = "none";
        },
        0
    )
});
</script> 
<script>window.addEventListener("load", function(){
    setTimeout(
        function close(event){
            document.querySelector(".gww-pop-dn-1").style.display = "none";
        },
        8500
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
</body>
</html>