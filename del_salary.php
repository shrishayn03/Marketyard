<?php
session_start();
if(!isset($_SESSION['user_id']))
{
	  header("location:login.php");
}
?>
<?php 
 include("includes/connect.php");

 $delete_salary = $_GET['id'];

 $delete_query = " delete from employee where  eno=$delete_salary ";
 
 if(mysqli_query($con,$delete_query)){
		echo "<script>alert('SALARY  DELETED')</script>";
		echo "<script>window.open('show_salary.php','_self')</script>";

 }
?>

