<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	  header("location:login.php");
}
?>
<?php 
 include("includes/connect.php");



if(isset($_GET['del_customer']))
{
 $delete_customer = $_GET['del_customer'];

 $delete_query = " delete from customer where  cno='$delete_customer'";
 
 if(mysqli_query($con,$delete_query)){
		echo "<script>alert('CUSTOMER DELETED')</script>";
		echo "<script>window.open('show_customer.php?del_customer=del_customer','_self')</script>";

 }}
?>

