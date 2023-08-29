<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>live</title>     
     <?php require_once('../link.php');?>
     <style>

     </style>
</head>
<body>


<div class="agLiveTab">
  <button class="agLiveTablinks" id="defaultOpen" onclick="openCity(event, 'youtube')">YouTube <i class="fa-brands fa-youtube fa-bounce" style="color: #f90b0b;"></i></button>
  <button class="agLiveTablinks" onclick="openCity(event, 'facebook')">facebook <i class="fa-brands fa-facebook fa-bounce" style="color: #1d6ced;"></i></button>
  <button class="agLiveTablinks" onclick="openCity(event, 'tiktok')">TikTok <i class="fa-brands fa-tiktok fa-bounce" style="color: #0f1114;"></i></button>
</div>

<div id="youtube" class="agLiveTabcontent">


<button class="agLiveAcc"> 1ST SERVICE </button>
<div class="agLivePanel">
<div class="container" style="color:red;">
<div class="ag-display-container ">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/t5poz0pcmLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
</div>
</div>
</div>


<button class="agLiveAcc"> 2ND SERVICE </button>
<div class="agLivePanel">
<div class="container" style="color:red;">
<div class="ag-display-container ">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/t5poz0pcmLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
</div>
</div>
</div>


</div>

<div id="facebook" class="agLiveTabcontent">

<button class="agLiveAcc"> 1ST SERVICE </button>
<div class="agLivePanel">
<div class="container" style="color:red;">
<div class="ag-display-container ">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/t5poz0pcmLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
</div>
</div>
</div>


<button class="agLiveAcc"> 2ND SERVICE </button>
<div class="agLivePanel">
<div class="container" style="color:red;">
<div class="ag-display-container ">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/t5poz0pcmLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
</div>
</div>
</div>


</div>

<div id="tiktok" class="agLiveTabcontent">


<button class="agLiveAcc"> 1ST SERVICE </button>
<div class="agLivePanel">
<div class="container" style="color:red;">
<div class="ag-display-container ">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/t5poz0pcmLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
</div>
</div>
</div>


<button class="agLiveAcc"> 2ND SERVICE </button>
<div class="agLivePanel">
<div class="container" style="color:red;">
<div class="ag-display-container ">
<iframe width="100%" height="315" src="https://www.youtube.com/embed/t5poz0pcmLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
</div>
</div>


</div>





























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