<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the gaaTab */
.gaaTab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the gaaTab */
.gaaTab button {
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
.gaaTab button:hover {
  background-color: #ddd;
}

/* Create an active/current gaaTablink class */
.gaaTab button.active {
  background-color: #ccc;
}

/* Style the gaaTab content */
.gaaC {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>
</head>
<body>


<div class="gaaTab">
  <button class="gaaTablinks" onclick="openCity(event, 'YLink')">Y-Link</button>
  <button class="gaaTablinks" onclick="rf2()">F-Link</button>
  <button class="gaaTablinks" onclick="rt3()">T-Link</button>
</div>

<div id="YLink" class="gaaC">
<div class="gaaTab">
  <button class="gaaTablinks" onclick="ry1()" >Y1stLink</button>
  <button class="gaaTablinks" onclick="openCity(event, 'Y2ndLink')" id="defaultOpen">Y2ndLink</button>
</div>

</div>







<div id="Y2ndLink" class="gaaC">
<?php
// define variables and set to empty values
$y2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $y2 = y2ndlink($_POST["y2"]);
 
}

function y2ndlink($data) {
   
    return $data;
  }
?>

<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">  
  <textarea name="y2" style="width:100%; height:50vh;"></textarea>
 <br><br><br>
  <input type="submit" name="submity2" value="Submit">  
</form>
 

<?php
echo "<h1>Display</h1>";
echo $y2;
?>

<?php
$myfiley2 = fopen("y2ndlink.php", "w") or die("Unable to open file!");
fwrite($myfiley2, $y2);
fclose($myfiley2);
?>

</div>



















<script>
function ry1() {
  location.replace("0000godaa1.php")
}
</script>

<script>
function ry11() {
  location.replace("0000godaa11.php")
}
</script>

<script>
function rf2() {
  location.replace("0000godaa2.php")
}
</script>

<script>
function rf22() {
  location.replace("0000godaa22.php")
}
</script>

<script>
function rt3() {
  location.replace("0000godaa3.php")
}
</script>

<script>
function rt33() {
  location.replace("0000godaa33.php")
}
</script>















<script>
function openCity(evt, cityName) {
  var i, gaaC, gaaTablinks;
  gaaC = document.getElementsByClassName("gaaC");
  for (i = 0; i < gaaC.length; i++) {
    gaaC[i].style.display = "none";
  }
  gaaTablinks = document.getElementsByClassName("gaaTablinks");
  for (i = 0; i < gaaTablinks.length; i++) {
    gaaTablinks[i].className = gaaTablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
