<!DOCTYPE html>
<html>


<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Float cancel and delete buttons and add an equal width */
.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

/* Add a color to the cancel button */
.cancelbtn {
  background-color: #ccc;
  color: black;
}

/* Add a color to the delete button */
.deletebtn {
  background-color: #f44336;
}

/* Add padding and center-align text to the container */
.container {
  padding: 16px;
  text-align: center;
}

/* The Modal (background) */
.modal {
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Modal Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and delete button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
     width: 100%;
  }
}
</style>
<body>

<?php
echo "Today is " . date("l");
?>


<?php
date_default_timezone_set("Africa/Tunis");
$t = date("l");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t == "Sunday") {
  echo "<h2>Delete Modal</h2>";

echo '<button onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="close22""'; 
echo ">Open Modal</button>";


echo "<div id='id01' class='modal'>";


echo '<span onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="close""'; 
echo ">×</span>";


echo "
  <form class='modal-content' action='/action_page.php'>
    <div class='container'>
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <div class='clearfix'>";
      

echo '<button type="button" id="close" onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="cancelbtn""'; 
echo ">Cancel</button>";


echo '<button type="button" id="close" onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="deletebtn""'; 
echo ">Delete</button>";
      
        
        
 echo"</div>
    </div>
  </form>
</div>";
} 
elseif ($t == "Tuesday") {


echo "<h2>Delete Modal</h2>";

echo '<button onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="close22""'; 
echo ">Open Modal</button>";


echo "<div id='id01' class='modal'>";


echo '<span onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="close""'; 
echo ">×</span>";


echo "
  <form class='modal-content' action='/action_page.php'>
    <div class='container'>
      <h1>Delete Account</h1>
      <p>Are you sure you want to delete your account?</p>
    
      <div class='clearfix'>";
      

echo '<button type="button" id="close" onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="cancelbtn""'; 
echo ">Cancel</button>";


echo '<button type="button" id="close" onclick="';
echo  "document.getElementById('id01').style.display='none'";
echo'" class="deletebtn""'; 
echo ">Delete</button>";
      
        
        
 echo"</div>
    </div>
  </form>
</div>";
} else {
  
}
?>



<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
close.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
