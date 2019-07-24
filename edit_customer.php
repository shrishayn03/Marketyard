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





<h1 style="background-color:Tomato;"><center>UPDATE CUSTOMER PROFILE INFORMATION !!!!!!</center></h1>

</head>

<body>

<?php

include("includes/connect.php");

$edit_id = @$_GET['edit'];

$result = mysqli_query($con,$result = "select * from customer where cno='$edit_id' ");
	$numrows = mysqli_num_rows($result);

while($row = mysqli_fetch_array($result)) 

{
	$edit_id1 = $row["cno"];
	$cname = $row["cname"];
	$cadd = $row["cadd"];
	$mno = $row["mno"];


?>



<form method="post" action="edit_customer.php?edit_form=<?php echo $edit_id; ?>">

<table width="65%" align="center" cellpadding="5" cellspacing="15">
<tr>
<td> CUSTOMER NAME:</td>
		<td><input type="text" name="cname" placeholder="CUSTOMER NAME" value="<?php echo $cname; ?>" ></td>
	 	
</tr>

<tr>
	<td>CUSTOMER ADDRESS:</td>
	<td><textarea name="cadd" cols="40" rows="15"  placeholder="ENTER CUSTOMER ADDRESS"  ><?php echo $cadd ;?></textarea></td>
	</tr>

<tr>
<td>COUSTOMER CONTACT NO. -</td>
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
	
	
	  $cname = $_POST['cname'];
	  $cadd = $_POST['cadd'];
	  $mno = $_POST['mno'];
     
	
	

	
	$update_query = "update customer set cname='$cname',cadd='$cadd',mno='$mno'
	where cno='$update_id'";
	
	
	if(mysqli_query($con,$update_query)){
   
		
	//header("location:show_farmer.php?updated");					
 //echo "<script>alert('info has been updated'";
 echo "<script>alert('CUSTOMER INFO UPDATED')</script>";
 echo "<script>window.open('show_customer.php?edit=edit','_self')</script>";			
 	} 	
}

?>




