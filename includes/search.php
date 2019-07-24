<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	font-family:"Arial Black", Gadget, sans-serif;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.search{
	width:85%;
	padding:10px;
	font-size:18px;
	margin-left:3%;
	}


</style>





</head>

<body>

<form action="show_farmer.php" method="post">

  <input type="text" name="search" class ="search" placeholder="Search..">
  <input type="submit" name="submit" class="button button2" value="Search">
    <?php
    include("includes/connect.php");
 //code ye to be written
  
  ?>
</form>






</body>
</html>
