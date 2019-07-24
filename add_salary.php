<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	  header("location:login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<title>ADD CUSTOMER</title>
</head>
<style>
.btn {
    border: none;
    color: white;
    padding: 19px 38px;
    font-size: 16px;
    cursor: pointer;
	width:100%;
}
.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}
</style>

<style>
.button {
    background-color: #4CAF50;; /* Green */
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 16px 8px;
    cursor: pointer;
}

.button4 {
		border-radius: 12px;
			width:100%;
			}
</style>



<?php
 include("navbar.php");
?>
<center><button class="btn info">ADD EMPLOYEE SALARY INFORMATION</button></center>


<body>
<?php
include("includes/connect.php");
 $a1 = $_GET['id'];?>
<form method="post" action="add_salary.php?id=<?php echo $a1;?>">



<table width="65%" align="center" cellpadding="5" cellspacing="15">
<tr>
<?php
$result5 = mysqli_query($con,"select ename from employee where eno = $a1");
		
while($row = mysqli_fetch_array($result5))
		{

		  $ename = $row['ename'];
		

?>
<tr>
<td> EMPLOYEE NAME:</td>
		<td><input type="text" name="ename" placeholder="EMPLOYEE NAME" value="<?php echo $ename; ?>" ></td>
<?php }?>	 	
</tr>

	 	
<tr>
<td></td>
		<td></td>
	 	
</tr>
<td>
 </td>

</tr>


<tr>
<td>EMPLOYEE SALARY:</td>
		<td><input type="text" name="esal" placeholder="EMPLOYEE SALARY"  ></td>
	 	
</tr>
<td align="center" colspan="6">
 <input type="submit" value="ADD EMPLOYEE SALARY" name="submit" class="button button4"></td>

</tr>


</table>

</body>
</html>


<?php
 include("includes/connect.php");
 
 
 if(isset($_POST['submit'])){
	  $a1 = $_GET['id'];
	 $ename = $_POST['ename'];
	 $esal = $_POST['esal'];
	
	  if($ename =="" or $esal=="" )
	 {
		 echo "<script>alert('ANY FEILD IS EMPTY')</script>";
		 exit();
	 }
$res=mysqli_query($con ,$res="select eno from employee where ename = '$ename' ");
$numrows = mysqli_num_rows($res);

while($row = mysqli_fetch_array($res)) 

{

	$eno = $row["eno"];

}
$query = mysqli_query($con,"update  employee set salary='$esal' where eno='$eno' ");
$i=mysqli_query($con,$query);
	 if($i)
	{
	
 	  echo "<center><h1>Salary added successfully</h1></center>";
	}
}

	 
