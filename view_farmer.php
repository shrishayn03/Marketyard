<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	  header("location:login.php");
}
?><?php
 include("includes/connect.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>




<style>
h1 {
    text-shadow: 2px 2px 5px red;
	text-align:center;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	border:5px;
	margin-bottom:30px;
	
}

</style>
<?php
 include("navbar.php");
?>
<h1 style="; /* [disabled]background-color:#2196F3; */"><center>FARMER PROFILE INFORMATION !!!!!!</center></h1>




<body>


<?php
 include("includes/connect.php");

 if(isset($_GET['id']))
{
	$view_id = $_GET['id'];
	
 $result = mysqli_query($con,$result = "select * from farmer where fno='$view_id'");
	$numrows = mysqli_num_rows($result);
	
	 while($row = mysqli_fetch_array($result)) 

{
	$fname = $row["fname"];
	$fadd = $row["fadd"];
	$mno = $row["mno"];


?>

<style>
table {
    border-collapse: collapse;
    width: 70%;
	margin-left:15%;
	
}

th, td {
    text-align: left;
    padding: 20px;
}

tr:nth-child(even){background-color: #2196F3}
</style>

<table width="65%" align="center" cellpadding="5" cellspacing="15">
<tr><td> 
<p><b>FARMER NAME</b></td><td>&nbsp;&nbsp;<?php echo $fname; ?></p></td> </tr> 


<tr><td> 
<p><b>FARMER ADRESS</b></td><td>&nbsp;&nbsp;<?php echo $fadd; ?></p></td> </tr>

<tr><td> 

<p><b>FARMER Contact NO.</b></td><td>&nbsp;&nbsp;<?php echo $mno; ?></p>


</table>


<?php } }?>





</body>
</html>
