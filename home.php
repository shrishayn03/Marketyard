<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	  header("location:login.php");
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
.mySlides {display:none;}
</style>
</head>
<?php
 include("navbar.php");
?>
<body>


<div class="w3-content w3-section" style="max-width:90%">
  <img class="mySlides" src="images/1.jpg" style="width:100%">
  <img class="mySlides" src="images/2.jpg" style="width:100%">
  <img class="mySlides" src="images/3.jpg" style="width:100%">
    <img class="mySlides" src="images/4.jpg" style="width:100%">
        <img class="mySlides" src="images/5.jpeg" style="width:100%">
 <img class="mySlides" src="images/6.jpeg" style="width:100%">
<img class="mySlides" src="images/7.jpg" style="width:100%">
<img class="mySlides" src="images/8.jpeg" style="width:100%">

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
