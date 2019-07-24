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
<h1 style="; /* [disabled]background-color:#2196F3; */"><center>EMPLOYEE SALARY INFORMATION !!!!!!</center></h1>




<body>


<?php
 include("includes/connect.php");

 if(isset($_GET['id']))
{
	$view_id = $_GET['id'];
	
 $result = mysqli_query($con,$result = "select ename,eadd,salary from employee where eno='$view_id' ");
	$numrows = mysqli_num_rows($result);
	
	 while($row = mysqli_fetch_array($result)) 

{
	$esal = $row["salary"];
	$ename = $row["ename"];
	$eadd = $row["eadd"];





?>

<style>


#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

h1 {
    text-shadow: 2px 2px 5px red;
	text-align:center;
}
h1 {
    text-shadow: 2px 2px 5px red;
	text-align:center;
}
.button4 {
		border-radius: 12px;
			width:20%;
			text-align:center;
			}



</style>

<table id="myTable" width="65%" align="center" cellpadding="5" cellspacing="15">
<tr><td> 
<p>EMPLOYEE NAME</td><td>&nbsp;&nbsp;<?php echo $ename; ?></p></td> </tr> 
<tr><td> 
<p>EMPLOYEE SALARY</td><td>&nbsp;&nbsp;<?php echo $esal; ?></p></td> </tr> 

<tr><td> 
<p>EMPLOYEE ADDRESS</td><td>&nbsp;&nbsp;<?php echo $eadd; ?></p></td> </tr> 



</table>


<?php } }?>





</body>
</html>
