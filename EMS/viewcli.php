<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `client`";

$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View client |  Admin Panel | DORA Corporation</title>

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

		<table>
			<tr bgcolor="#00FF00">

				<th align = "center">Emp. ID&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Picture&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Birthday&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Contact&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Addressx&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Organization&nbsp;&nbsp;</th>
				
				
				<th align = "center">Options</th>
			</tr>

			<?php
				$colo=1;
				while ($employee = mysqli_fetch_assoc($result)) {
					if($colo%2==0){
						echo "<tr bgcolor='#C0C0C0'>";
					  }
					  else{
						echo "<tr>";
					  }
					echo "<td>".$employee['id']."</td>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['organization']."</td>";
					echo "<td><a href=\"editc.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
					  $colo+=1;
				}


			?>

		</table>
		
	
</body>
</html>