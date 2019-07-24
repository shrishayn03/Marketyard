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
<body>
<h1>CUSTOMER INFORMATION!</h1>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for customer.." title="Type in a name">



<p><span style="color:RED; padding:5px; margin:5px"><h2>Total CUSTOMERS:

<?php
 include("includes/connect.php");
 
$result3 = mysqli_query($con,"select * from customer ");
$numrows = mysqli_num_rows($result3);


echo "(" .$numrows. ")" ;

?></h2>
</span></p>
<table id="myTable">
<tr class="header">
<th>CUSTOMER NAME</th>
<th>CUSTOMER ADDRESS</th>
<th>CUSTOMER CONTACT NO.</th>
<th>VIEW PROFILE</th>
<th>DELETE CUSTOMER</th>
<th>EDIT</th>
</tr>
<?php
include("includes/connect.php");

$i=1;
//if(isset($_GET['viewcust']))
	//{
	$result5 = mysqli_query($con,"select * from customer ");
		$numrows = mysqli_num_rows($result5);


while($row = mysqli_fetch_array($result5))
		{
		$cno = $row['cno'];
		  $cname = $row['cname'];
			$cadd= $row['cadd'];
			$mno = $row['mno'];

?>

<tr align="center">


    <td><?php echo $cname;?></td>
    <td><?php echo $cadd;?></td>
	<td><?php echo $mno;?></td>

<td><a href="view_customer.php?id=<?php echo $cno; ?>">View Profile</a></td>
<td><a href="del_customer.php?del_customer=<?php echo $cno; ?>">Delete Customer</a></td>
<td><a href="edit_customer.php?edit=<?php echo $cno; ?>">Edit Profile</a></td>
</tr>


<?php } ?>
</table>
</body>
</html>
<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
