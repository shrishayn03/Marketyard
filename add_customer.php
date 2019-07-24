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


<title>ADD CUSTOMER</title>
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


<center><button class="btn info">ADD CUSTOMER INFORMATION</button></center>

<br>
<br>
<body>

<div class="container">

<form method="post" action="add_customer.php">
<div class="form-group">
      <label for="email">CUSTOMER  NAME:</label>
      <input class="form-control" type="text" name="cname" placeholder="CUSTOMER NAME">
    </div>
    
    <div class="form-group">
      <label for="email">CUSTOMER ADDRESS:</label>
      <textarea name="cadd" class="form-control" cols="20" rows="5" placeholder="ENTER CUSTOMER ADDRESS"></textarea>
    </div>
    
    <div class="form-group">
      <label for="email">CUSTOMER NUMBER:</label>
     <input type="text" maxlength="10" class="form-control" pattern="[0-9]{10}" name="mno"  placeholder="Enter Mobile Number" required />
    </div>
<center><button type="submit" style="width:20%" class="btn btn-primary" name="submit">ADD CUSTOMER</button></center>



</form>
</div>



</body>
</html>


<?php
 include("includes/connect.php");
 
 
 if(isset($_POST['submit'])){
	 
	 $cname = $_POST['cname'];
	 $cadd = $_POST['cadd'];
	 $mno = $_POST['mno'];
	 
	  if($cname =="" or $cadd=="" or $mno=="")
	 {
		 echo "<script>alert('ANY FEILD IS EMPTY')</script>";
		 exit();
	 }

$query = mysqli_query($con,"insert into customer (cname,cadd,mno) values('$cname','$cadd','$mno')");
$i=mysqli_query($con,$query);
	 if($i)
	{
	
 	  echo "<center><h1>WELCOME CUSTOMER</h1></center>";
	}
}

	 
