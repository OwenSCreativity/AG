<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Live</title>     
     <?php require_once('../link.php');?>
     <link rel="stylesheet" href="livse.css">
<style>
     
.agLiveAcc {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 20px;
    transition: 0.4s;
    font-weight: bolder;
  }
  
  .agLiveActive, .agLiveAcc:hover {
    background-color: #ccc;
  }
  
  .agLiveAcc:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
  }
  
  .agLiveActive:after {
    content: "\2212";
  }
  
  .agLivePanel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
  }
  .agLiveTab {
    overflow: hidden;
    border: 1px solid rgb(207, 155, 22);
    background-color: #f1f1f1;
  }
  
  /* Style the buttons inside the agLiveTab */
  .agLiveTab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
  }
  
  /* Change background color of buttons on hover */
  .agLiveTab button:hover {
    background-color: rgb(56, 51, 49);
    color: rgb(207, 155, 22);

  }
  
  /* Create an agLiveActive/current agLiveTablink class */
  .agLiveTab button.agLiveActive {
    background-color: rgb(56, 51, 39);
    color: rgb(207, 155, 22);

  }
  
  /* Style the agLiveTab content */
  .agLiveTabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
  }
  .ag-display-container{
    width:100%;
  }

  .smallLink{
    font-size:1px;
  }
  


   @media screen and (min-width : 344px ) {
       .smallLink{
         display: none;
       }
     }
     @media screen and (max-width : 345px ) {
       .bigLink{
         display: none;
       }
     }
     @media screen and (min-width : 289px ) {
       .smallerLink{
         display: none;
       }
     }
     @media screen and (max-width : 290px ) {
       .smallLink{
         display: none;
       }
     }
</style>
</head>
<body>


<div class="agLiveTab" style="background-color:black; color: rgb(207, 155, 22);">
  <button style=" color: rgb(207, 155, 22);font-size:10px;font-weight:bolder;" class="agLiveTablinks smallerLink" id="defaultOpen" onclick="openCity(event, 'youtube')">YouTube <i class="fa-brands fa-youtube fa-bounce" style="color: #f90b0b;"></i></button>
  <button style=" color: rgb(207, 155, 22);font-size:10px;font-weight:bolder;" class="agLiveTablinks smallerLink" onclick="openCity(event, 'facebook')">facebook <i class="fa-brands fa-facebook fa-bounce" style="color: #1d6ced;"></i></button>
  <button style=" color: rgb(207, 155, 22);font-size:10px;font-weight:bolder;" class="agLiveTablinks smallerLink" onclick="openCity(event, 'tiktok')">TikTok <i class="fa-brands fa-tiktok fa-bounce" style="color: #0f1114;"></i></button>
</div>

<div class="agLiveTab" style="background-color:black; color: rgb(207, 155, 22);">
  <button style=" color: rgb(207, 155, 22);font-size:12px;font-weight:bolder;" class="agLiveTablinks smallLink" id="defaultOpen" onclick="openCity(event, 'youtube')">YouTube <i class="fa-brands fa-youtube fa-bounce" style="color: #f90b0b;"></i></button>
  <button style=" color: rgb(207, 155, 22);font-size:12px;font-weight:bolder;" class="agLiveTablinks smallLink" onclick="openCity(event, 'facebook')">facebook <i class="fa-brands fa-facebook fa-bounce" style="color: #1d6ced;"></i></button>
  <button style=" color: rgb(207, 155, 22);font-size:12px;font-weight:bolder;" class="agLiveTablinks smallLink" onclick="openCity(event, 'tiktok')">TikTok <i class="fa-brands fa-tiktok fa-bounce" style="color: #0f1114;"></i></button>
</div>

<div class="agLiveTab" style="background-color:black; color: rgb(207, 155, 22);">
  <button style=" color: rgb(207, 155, 22);font-size:17px;" class="agLiveTablinks bigLink" id="defaultOpen" onclick="openCity(event, 'youtube')">YouTube <i class="fa-brands fa-youtube fa-bounce" style="color: #f90b0b;"></i></button>
  <button style=" color: rgb(207, 155, 22);font-size:17px;" class="agLiveTablinks bigLink" onclick="openCity(event, 'facebook')">facebook <i class="fa-brands fa-facebook fa-bounce" style="color: #1d6ced;"></i></button>
  <button style=" color: rgb(207, 155, 22);font-size:17px;" class="agLiveTablinks bigLink" onclick="openCity(event, 'tiktok')">TikTok <i class="fa-brands fa-tiktok fa-bounce" style="color: #0f1114;"></i></button>
</div>




<div id="youtube" class="agLiveTabcontent">
<h1 style="font-weight:bolder;Font-size:25px;color:Black;">Please Click On A Service To Watch...</h1>


<button class="agLiveAcc"><i class="fa-solid fa-caret-down fa-bounce fa-lg" style="color: #000000;"></i> 1ST SERVICE  </button>
<div class="agLivePanel">
<?php require('../0000godaa0017ad/y1stlink.php');?>
</div>

<h1 style="font-weight:bolder;Font-size:25px;color:Black;">Please Click On A Service To Watch...</h1>

<button class="agLiveAcc"><i class="fa-solid fa-caret-down fa-bounce fa-lg" style="color: #000000;"></i> 2ND SERVICE </button>
<div class="agLivePanel">
<?php require('../0000godaa0017ad/y2ndlink.php');?>
</div>


</div>

<div id="facebook" class="agLiveTabcontent">
<h1 style="font-weight:bolder;Font-size:25px;color:Black;">Please Click On A Service To Watch...</h1>

<button class="agLiveAcc"><i class="fa-solid fa-caret-down fa-bounce fa-lg" style="color: #000000;"></i> 1ST SERVICE </button>
<div class="agLivePanel">
<?php require('../0000godaa0017ad/f1stlink.php');?>
</div>
<h1 style="font-weight:bolder;Font-size:25px;color:Black;">Please Click On A Service To Watch...</h1>


<button class="agLiveAcc"><i class="fa-solid fa-caret-down fa-bounce fa-lg" style="color: #000000;"></i>  2ND SERVICE </button>
<div class="agLivePanel">
<?php require('../0000godaa0017ad/f2ndlink.php');?>
</div>

</div>

<div id="tiktok" class="agLiveTabcontent">

<h1 style="font-weight:bolder;Font-size:25px;color:Black;">Please Click On A Service To Watch...</h1>

<button class="agLiveAcc"><i class="fa-solid fa-caret-down fa-bounce fa-lg" style="color: #000000;"></i>  1ST SERVICE </button>
<div class="agLivePanel">
<?php require('../0000godaa0017ad/t1stlink.php');?>
</div>

<h1 style="font-weight:bolder;Font-size:25px;color:Black;">Please Click On A Service To Watch...</h1>

<button class="agLiveAcc"><i class="fa-solid fa-caret-down fa-bounce fa-lg" style="color: #000000;"></i>  2ND SERVICE></button>
<div class="agLivePanel">
<?php require('../0000godaa0017ad/t2ndlink.php');?>
</div>


</div>



























<?php require_once('../liveChat.php');?>


<?php require_once('../footer.php');?>

<script>
function openCity(evt, cityName) {
  var i, agLiveTabcontent, agLiveTablinks;
  agLiveTabcontent = document.getElementsByClassName("agLiveTabcontent");
  for (i = 0; i < agLiveTabcontent.length; i++) {
    agLiveTabcontent[i].style.display = "none";
  }
  agLiveTablinks = document.getElementsByClassName("agLiveTablinks");
  for (i = 0; i < agLiveTablinks.length; i++) {
    agLiveTablinks[i].className = agLiveTablinks[i].className.replace(" agLiveActive", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " agLiveActive";

}  
document.getElementById("defaultOpen").click();

</script>
   
<script>
var acc = document.getElementsByClassName("agLiveAcc");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("agLiveActive");
    var agLivePanel = this.nextElementSibling;
    if (agLivePanel.style.maxHeight) {
      agLivePanel.style.maxHeight = null;
    } else {
      agLivePanel.style.maxHeight = agLivePanel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>