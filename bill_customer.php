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


<title>ADD FARMER</title>
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

<center><button class="btn info">CUSTOMER BILL</button></center>


<body>

<?php $a1 = $_GET['del_farm'];?>
<form method="post" action="bill_customer.php?del_farm=<?php echo $a1;?>">

<table width="65%" align="center" cellpadding="5" cellspacing="30" >

<tr borderspacing="5">
<td> DATE:</td>
		<td><input type="date" name="dt" value=<?php  echo   date("Y/m/d")?> /><br>
        </td>
	 	
</tr>
<tr>
<td> </td>
		<td><br>
        </td>
	 	
</tr>

<?php
include("includes/connect.php");
$a = $_GET['del_farm'];


	$result5 = mysqli_query($con,"select * from customer where cno = $a");
		


while($row = mysqli_fetch_array($result5))
		{

		  $cname = $row['cname'];
		

?>
<tr>
<td> CUSTOMER NAME:</td>
		<td><input type="text" name="cname" placeholder="CUSTOMER NAME" value="<?php echo $cname; ?>" ></td>
<?php }?>	 	

	 	
</tr>
<tr>
<td> </td>
		<td><br>
        </td>
	 	
</tr>
<tr>
<td> VEGETABLE NAME:</td>
		<td>
        </td>
	 	
</tr>




<?php
include("includes/connect.php");

$i=1;

	$result5 = mysqli_query($con,"select * from vegetable");
		$numrows = mysqli_num_rows($result5);


while($row = mysqli_fetch_array($result5))
		{
$vno = $row['vno'];
		  $vnm = $row['vname'];
		$frate = $row['crate'];
?>

	

<tr>
<td><?php echo $vnm; ?> </td>
		<td><input type="checkbox"  name="chk[]" value="<?php echo $vnm; ?>"  >    <br><div id="dvPassport">
        Rate:<input type="text" name="<?php echo $vnm; ?>" value="<?php echo $frate; ?>  "/>
        <input type="text" name="<?php echo $vno ; ?>" placeholder="Enter Quantity"/>
    </div><br></td> 
<?php }?>	 	
</tr>
	 	

<tr>
<td> </td>
		<td><br>
        </td>
	 	
</tr>










<tr>

<td align="center" colspan="6">
 <input type="submit" value="BILL" name="submit" class="button button4"></td>

</tr>


</table>

</body>
</html>


<?php
 include("includes/connect.php");
 
 
 if(isset($_POST['submit'])){
	 $i = 0;
	 $dt = $_POST['dt'];
     $cn = $_GET['del_farm'];
	 $cname = $_POST['cname'];
	 

	 
$query1 = "insert into billofcustomer (dt,cno) values('$dt','$cn')";

if(mysqli_query($con,$query1)){
	$res=mysqli_query($con ,"SELECT * FROM `billofcustomer` order by rno desc limit 1 ");
     $numrows = mysqli_num_rows($res);

	 while($row = mysqli_fetch_array($res))
		{
			 $rno = $row['rno'];
			 $chk = $_POST['chk'];
foreach( $chk as $c){
	$res1=mysqli_query($con ,"SELECT * FROM vegetable where vname = '$c' ");
	
	 while($row1 = mysqli_fetch_array($res1))
		{
			 $vno = $row1['vno'];
	 $cquat = $_POST[$vno];
	 $crate = $_POST[$c];
	  $cgross = $cquat * $crate;
$query2 = mysqli_query($con,"insert into cutomerveg (ctype,cquat,crate,cgross,rno) values('$c',$cquat,$crate,$cgross,$rno)");
		}
	//header("location:show_farmer.php?updated");					
 //echo "<script>alert('info has been updated'";
  echo "<script>alert('BILL INFO SAVED')</script>";
 echo "<script>window.open('billcus.php?rno=$rno','_self')</script>";
}
}


		
   
		
				
		}
}
 ?>
	

	 

