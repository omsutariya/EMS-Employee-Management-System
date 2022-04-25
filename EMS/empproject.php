<?php 
	$id = (isset($_GET['id']) ? $_GET['id'] : '');
	require_once ('process/dbh.php');
	$sql = "SELECT * FROM `project` where eid = '$id'";
	$result = mysqli_query($conn, $sql);
	
?>



<html>
<head>
	<title>Employee Panel | DORA Corporation</title>
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
				<li><a class="homered" href="eloginwel.php?id=<?php echo $id?>""><button type="button" class="btn btn-primary">HOME</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a class="homeblack" href="myprofile.php?id=<?php echo $id?>""><button type="button" class="btn btn-primary">My Profile</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a class="homeblack" href="empproject.php?id=<?php echo $id?>""><button type="button" class="btn btn-primary">My Projects</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a class="homeblack" href="applyleave.php?id=<?php echo $id?>""><button type="button" class="btn btn-primary">Apply Leave</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
				<li><a class="homeblack" href="elogin.html"><button type="button" class="btn btn-primary">Log Out</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">


		<table>
			<tr>

				<th align = "center">Project ID&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Project Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Due Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Sub Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Mark&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Status&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
				<th align = "center">Option&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {

					echo "<tr>";
					echo "<td>".$employee['pid']."</td>";
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['mark']."</td>";
					echo "<td>".$employee['status']."</td>";
					

					 echo "<td><a href=\"psubmit.php?pid=$employee[pid]&id=$employee[eid]\">Submit</a>";

				}


			?>

		</table>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>  -->
    
        
    <footer class="footer mt-auto py-3 bg-light"> <!--Footer-->
        <div class="container">
          <span class="text">Contact No: 99999999999</span>
          <br>
          <span class="text">Email : infodora@gmail.com</span>
        </div>
      </footer>
      
		</body>
</html>