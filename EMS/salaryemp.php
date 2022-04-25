<?php

require_once ('process/dbh.php');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,salary.base,salary.bonus,salary.total from employee,`salary` where employee.id=salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Salary Table | XYZ Corporation</title>

   <!-- Required meta tags -->
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>

<body>
    <header>
    <nav class="navbar navbar-light bg-light">  <!--Header-->
        <ul class="nav nav-tabs">
                <li><a class="homeblack" href="index.html">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKKn9lw42MqY8h80TXC-D5DppAZjOViRnP3g&usqp=CAU" alt="" width="60" height="40">
                </a></li>
        </ul>   
        <ul class="nav justify-content-end">
        <li><a class="homered" href="aloginwel.php"><button type="button" class="btn btn-primary">View Ranks</button></a></li>&nbsp;&nbsp;
            <li><a class="homered" href="addemp.php"><button type="button" class="btn btn-primary">Add Employee</button></a></li>&nbsp;&nbsp;
            <li><a class="homered" href="addcli.php"><button type="button" class="btn btn-primary">Add client</button></a></li>&nbsp;&nbsp;
            <li><a class="homered" href="viewcli.php"><button type="button" class="btn btn-primary">View client</button></a></li>&nbsp;&nbsp;
            <li><a class="homeblack" href="viewemp.php"><button type="button" class="btn btn-primary">View Employee</button></a></li>&nbsp;&nbsp;
            <li><a class="homeblack" href="assign.php"><button type="button" class="btn btn-primary">Assign Project</button></a></li>&nbsp;&nbsp;
            <li><a class="homeblack" href="assignproject.php"><button type="button" class="btn btn-primary">Project Status</button></a></li>&nbsp;&nbsp;
            <li><a class="homeblack" href="salaryemp.php"><button type="button" class="btn btn-primary">Salary Table</button></a></li> &nbsp;&nbsp;
            <li><a class="homeblack" href="empleave.php"><button type="button" class="btn btn-primary">Employee Leave</button></a></li>&nbsp;&nbsp;
            <li><a class="homeblack" href="alogin.html"><button type="button" class="btn btn-primary">Log Out</button></a></li>&nbsp;&nbsp;
            </ul>
        </nav>
    </header>
	 
	<div class="divider"></div>
	<div id="divimg">
		
	</div>
	
	<table>
			<tr>
				<th align = "center">Emp. ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				
				
				<th align = "center">Base Salary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Bonus&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">TotalSalary&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				
				
			</tr>
			
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['base']."</td>";
					echo "<td>".$employee['bonus']." %</td>";
					echo "<td>".$employee['total']."</td>";
					
					

				}


			?>
			
			</table>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>

    
        
    <footer class="footer mt-auto py-3 bg-light"> <!--Footer-->
        <div class="container">
          <span class="text">Contact No: 99999999999</span>
          <br>
          <span class="text">Email : infodora@gmail.com</span>
        </div>
      </footer>
      
</body>
</html>