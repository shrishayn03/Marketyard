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
<title>SHOW FARMER</title>

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
<body>




<?php
include("includes/connect.php");

$rno=$_GET["rno"];
//if(isset($_GET['viewcust']))
	//{
	$result5 = mysqli_query($con,"select * from farmerveg , billfarmer,farmer where farmerveg.rno=billfarmer.rno and farmer.fno=billfarmer.fno and billfarmer.rno=$rno limit 1 ");
		


while($row = mysqli_fetch_array($result5))
		{
		$fname = $row['fname'];
		$fadd = $row['fadd'];
		 $mno = $row['mno'];
		  

?>
<center>Farmer Name: <?php echo $fname; ?></center>
<center>Farmer Address: <?php echo $fadd; ?></center>
<center>Farmer Pho: <?php echo $mno; ?></center>

<?php } ?>


</span></p>
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
	$result5 = mysqli_query($con,"select * from farmerveg , billfarmer,farmer where farmerveg.rno=billfarmer.rno and farmer.fno=billfarmer.fno and billfarmer.rno=$rno ");
		


while($row = mysqli_fetch_array($result5))
		{
		$ftype = $row['ftype'];
		  $fqty = $row['fqty'];
			$frate= $row['frate'];
			$fgrossamt = $row['fgrossamt'];

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
	$result5 = mysqli_query($con,"select sum(fgrossamt) as t from farmerveg , billfarmer,farmer where farmerveg.rno=billfarmer.rno and farmer.fno=billfarmer.fno and billfarmer.rno=$rno ");
		


while($row = mysqli_fetch_array($result5))
		{
		$total = $row['t'];
		

?>

<tr align="center" class="header">


    <th colspan="3">Total Amount:</th>
    <th><?php echo $total;?></th>
	


</tr>
<?php } ?>
</table><br>
<br>
<center><input type="submit"  value="PRINT" name="submit" onclick="window.print();" class="button button4" "></center>


</body>
</html>