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
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}
<style>




h1 {
    text-shadow: 2px 2px 5px red;
	text-align:center;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	border:5px;
	margin-bottom:30px;
	
}

</style>

<h1 style="; /* [disabled]background-color:#2196F3; */"><center>FARMER BILL !!!!!!</center></h1>



<?php
 include("navbar.php");
?>
<body>

<?php
 include("includes/connect.php");

 if(isset($_GET['id']))
{
	$view_id = $_GET['id'];
	
 $result = mysqli_query($con,$result = "select rno,fname,fadd,dt,ftype,fqty,frate,fgrossamt from farmer,billfarmer where  farmer.fno=billfarmer.fn and billfarmer.fn='$view_id' ");
	$numrows = mysqli_num_rows($result);
	
	 while($row = mysqli_fetch_array($result)) 

{
	$rno = $row["rno"];
	$dt = $row["dt"];
	
	
	$fname = $row["fname"];
	$fadd = $row["fadd"];
		$ftype = $row["ftype"];
	$fqty = $row["fqty"];
	$frate = $row["frate"];
	$fgrossamt = $row["fgrossamt"];
	
?>

<style>
table {
    border-collapse: collapse;
    width: 65%;
}

th, td {
    text-align: left;
    padding: 3px;
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
#mytable tr.header, #mytable tr:hover {
  background-color: #f1f1f1;
}
h1 {
    text-shadow: 2px 2px 5px red;
	text-align:center;
}



</style>
<div id="print">
<table  align="center" cellpadding="10" cellspacing="10">
<tr><td> 

<p><b>FARMER NAME</b></td><td>&nbsp;&nbsp;<?php echo $fname; ?></p></td> </tr> 

<tr><td> 
<p><b>DATE</b></td><td>&nbsp;&nbsp;<?php echo $dt; ?></p></td> </tr> 

</table>
</td>

<table id="myTable"   align="center">
<tr class="header">
<th>VEGETABLE TYPE</th>
<th>QUNTITY IN KG.</th>
<th>RATE</th>
<th>TOTAL AMOUNT</th>
</tr>
<tr align="center">


    <td><?php echo $ftype;?></td>
    <td><?php echo $fqty;?></td>
	<td><?php echo $frate;?></td>
    <td><?php echo $fgrossamt;?></td>

</tr>

</table>
</div>
<br>
<br>
<center><input type="submit"  value="PRINT" name="submit" onclick="print();" class="button button5" "></center>

<?php } }?>


</body>
</html>
<script>
fuction print(){
	
var prtContent = document.getElementById('print');
var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
</script>