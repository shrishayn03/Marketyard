<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	  header("location:login.php");
}
?>
<?php 
 include("includes/connect.php");



if(isset($_GET['del_employee']))
{
 $delete_employee = $_GET['del_employee'];
 
 $delete_query = " delete from employee where  eno='$delete_employee'";
 
 if(mysqli_query($con,$delete_query)){
		echo "<script>alert('EMPLOYEE DELETED')</script>";
		echo "<script>window.open('show_employee.php?del_farm=del_farm','_self')</script>";

 }}
?>

