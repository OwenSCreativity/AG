<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
$comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $comment = test_input($_POST["comment"]);
 
}

function test_input($data) {
   
  return $data;
}
?>

<form method="post" action="<?php echo ($_SERVER["PHP_SELF"]);?>">  
  <textarea name="comment" style="width:100%; height:50vh;"></textarea>
 <br><br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
 

<?php
echo "<h1>Display</h1>";
echo $comment;
?>

<?php
$myfile = fopen("live1.php", "a") or die("Unable to open file!");
fwrite($myfile, $comment);
fclose($myfile);
?>

</body>
</html>