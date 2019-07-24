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
<title>SHOW CUSTOMER</title>

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

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
</style>

</head>
<?php
 include("navbar.php");
?>


<?php
include("includes/connect.php");

$rno=$_GET["rno"];
//if(isset($_GET['viewcust']))
	//{
	$result5 = mysqli_query($con,"select * from cutomerveg , billofcustomer,customer where cutomerveg.rno=billofcustomer.rno and customer.cno=billofcustomer.cno and billofcustomer.rno=$rno limit 1 ");
		


while($row = mysqli_fetch_array($result5))
		{
		$cname = $row['cname'];
		$cadd = $row['cadd'];
		 $mno = $row['mno'];
		  

?>
<center>Customer Name: <?php echo $cname; ?></center>
<center>Customer Address: <?php echo $cadd; ?></center>
<center>Customer Pho: <?php echo $mno; ?></center>

<?php } ?>


<body>



<table id="myTable">
<tr class="header">
<th>VEGETABLE TYPE</th>
<th>QUQNTITY IN KG</th>
<th>RATE</th>
<th>TOTAL AMOUNT</th>
</tr>
<?php
include("includes/connect.php");

$rno=$_GET["rno"];
//if(isset($_GET['viewcust']))
	//{
	$result5 = mysqli_query($con,"select * from cutomerveg , billofcustomer,customer where cutomerveg.rno=billofcustomer.rno and customer.cno=billofcustomer.cno and billofcustomer.rno=$rno ");
		


while($row = mysqli_fetch_array($result5))
		{
		$ftype = $row['ctype'];
		  $fqty = $row['cquat'];
			$frate= $row['crate'];
			$fgrossamt = $row['cgross'];

?>

<tr align="center">


    <td><?php echo $ftype;?></td>
    <td><?php echo $fqty;?></td>
	<td><?php echo $frate;?></td>
    <td><?php echo $fgrossamt;?></td>


</tr>


<?php } ?>

<?php
include("includes/connect.php");

$i=1;
//if(isset($_GET['viewcust']))
	//{
	$result5 = mysqli_query($con,"select sum(cgross) as t from cutomerveg , billofcustomer,customer where cutomerveg.rno=billofcustomer.rno and customer.cno=billofcustomer.cno ");
		


while($row = mysqli_fetch_array($result5))
		{
		$total = $row['t'];
		

?>

<tr align="center" class="header">


    <th colspan="3">Total Amount:</th>
    <th><?php echo $total;?></th>
	


</tr>


<?php } ?>
</table>
<br><br>
<center><input type="submit"  value="PRINT" name="submit" onclick="window.print();" class="button button4" "></center>


</body>
</html>