<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">VEGETABLES MARKET YARD</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">FARMER <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="add_farmer.php">Add Farmer</a></li>
           <li><a href="show_farmer.php">Show Farmer</a></li>
        </ul>
      </li>
      
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CUSTOMER <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="add_customer.php">Add Customer</a></li>
           <li><a href="show_customer.php">Show Customer</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">EMPLOYEE <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="add_employee.php">Add Employee</a></li>
           <li><a href="show_employee.php">Show Employee</a></li>
                      <li><a href="show_salary.php">Show Salary</a></li>
        </ul>
      </li>
     
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">BILL <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="showfbill.php">Show  FarmerBill </a></li>
           <li><a href="showcbill.php">Show CustomerBill</a></li>
        </ul>
       
      </li>
      </strong>
    </ul>
     <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
   
   
  </div>
</nav>

</body>
</html>
