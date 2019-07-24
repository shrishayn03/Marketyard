
<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	  header("location:login.php");
}
?>
<?php 
 include("includes/connect.php");



if(isset($_GET['del_farm']))
{
 $delete_farm = $_GET['del_farm'];
 
 $delete_query = " delete from farmer where  fno='$delete_farm'";
 
 if(mysqli_query($con,$delete_query)){
		echo "<script>alert('FARMER DELETED')</script>";
		echo "<script>window.open('show_farmer.php?del_farm=del_farm','_self')</script>";

 }}
?>

