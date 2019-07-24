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
<title>Untitled Document</title>


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





<h1 style="background-color:Tomato;"><center>UPDATE EMPLOYEE PROFILE INFORMATION !!!!!!</center></h1>

</head>

<body>

<?php

include("includes/connect.php");

$edit_id = @$_GET['edit'];

$result = mysqli_query($con,$result = "select * from employee where eno='$edit_id' ");
	$numrows = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result)) 

{
	$edit_id1 = $row["eno"];
	$ename = $row["ename"];
	$eadd = $row["eadd"];
	$mno = $row["mno"];


?>



<form method="post" action="edit_employee.php?edit_form=<?php echo $edit_id; ?>">

<table width="65%" align="center" cellpadding="5" cellspacing="15">
<tr>
<td> EMPLOYEE NAME:</td>
		<td><input type="text" name="ename" placeholder="EMPLOYEE NAME" value="<?php echo $ename; ?>" ></td>
	 	
</tr>

<tr>
	<td>EMPLOYEE ADDRESS:</td>
	<td><textarea name="eadd" cols="40" rows="15"  placeholder="ENTER EMPLOYEE ADDRESS"  value="<?php echo $eadd ;?>"></textarea></td>
	</tr>
<tr>
<td>EMPLOYEE CONTACT NO. -</td>
 <td><input type="text" maxlength="10" pattern="[0-9]{10}"  value="<?php echo $mno ;?>"  name="mno"  placeholder="Enter Mobile Number" required /></td>
</tr>


<tr>

<td align="center" colspan="6">
 <input type="submit" value="UPDATE" name="update" class="button button4"></td>

</tr>


</table>
</form>


<?php  }
?>
</body>
</html>



<?php

include("includes/connect.php");


if(isset($_POST['update']))
{
	$update_id = $_GET['edit_form'];
	
	
	  $ename = $_POST['ename'];
	  $eadd = $_POST['eadd'];
	  $mno = $_POST['mno'];
     
	
	

	
	$update_query = "update employee set ename='$ename',eadd='$eadd',mno='$mno'
	where eno='$update_id'";
	
	
	if(mysqli_query($con,$update_query)){
   
		
	//header("location:show_farmer.php?updated");					
 //echo "<script>alert('info has been updated'";
 echo "<script>alert('EMPLOYEE INFO UPDATED')</script>";
 echo "<script>window.open('show_employee.php?edit=edit','_self')</script>";			
 	} 	
}

?>




