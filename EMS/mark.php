
<?php

require_once ('process/dbh.php');
$id = (isset($_GET['id']) ? $_GET['id'] : '');
$pid = (isset($_GET['pid']) ? $_GET['pid'] : '');
$sql = "SELECT pid, project.eid, pname, duedate, subdate, mark, points, firstName, lastName, base, bonus, total FROM `project` , `rank` ,`employee`, `salary`  WHERE project.eid = $id AND pid = $pid";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $eid = mysqli_real_escape_string($conn, $_POST['eid']);
  $pid = mysqli_real_escape_string($conn, $_POST['pid']);
  

  $mark = mysqli_real_escape_string($conn, $_POST['mark']);
  $points = mysqli_real_escape_string($conn, $_POST['points']);
  $base = mysqli_real_escape_string($conn, $_POST['base']);
  $bonus = mysqli_real_escape_string($conn, $_POST['bonus']);
  $total = mysqli_real_escape_string($conn, $_POST['total']);

  $upPoint = $points+$mark;
  
  $upBonus = $bonus +  $mark;
  $upSalary = $base + ($upBonus*$base)/100; 
  echo "$upBonus";
  echo "string";
  echo "$upSalary";
 
 $result = mysqli_query($conn, "UPDATE `project` SET `mark`='$mark' WHERE eid=$eid and pid = $pid");

 $result = mysqli_query($conn, "UPDATE `rank` SET `points`='$upPoint' WHERE eid=$eid");
 $result = mysqli_query($conn, "UPDATE `salary` SET `bonus`='$upBonus' ,`total`='$upSalary' WHERE id=$eid");




 echo ("<SCRIPT LANGUAGE='JavaScript'>
   
    window.location.href='assignproject.php  ';
    </SCRIPT>");

  
}
?>




<?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $pid = (isset($_GET['pid']) ? $_GET['pid'] : '');
  $sql1 = "SELECT pid, project.eid, project.pname, project.duedate, project.subdate, project.mark, rank.points, employee.firstName, employee.lastName, salary.base, salary.bonus, salary.total FROM `project` , `rank` ,`employee`, `salary`  WHERE project.eid = $id AND project.pid = $pid AND project.eid = rank.eid AND salary.id = project.eid AND employee.id = project.eid AND employee.id = rank.eid";
  $result1 = mysqli_query($conn, $sql1);
  if($result1){
  while($res = mysqli_fetch_assoc($result1)){
  $pname = $res['pname'];
  $duedate = $res['duedate'];
  $subdate = $res['subdate'];
  $firstName = $res['firstName'];
  $lastName = $res['lastName'];
  $mark = $res['mark'];
  $points = $res['points'];
  $base = $res['base'];
  $bonus = $res['bonus'];
  $total = $res['total'];
  
}
}

?>

<html>
<head>
  <title>Project Mark | XYZ Corporation</title>

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
  

    <!-- <form id = "registration" action="edit.php" method="POST"> -->
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Project Mark</h2>
                    <form id = "registration" action="mark.php" method="POST">



                        <div class="input-group">
                          <p>Project Name</p>
                            <input class="input--style-1" type="text"  name="pname" value="<?php echo $pname;?>" readonly>
                        </div>
                       
                        
                        <div class="input-group">
                          <p>Employee Name</p>
                            <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstName;?> <?php echo $lastName;?>" readonly>
                        </div>

                       


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Due Date</p>
                                     <input class="input--style-1" type="text" name="duedate" value="<?php echo $duedate;?>" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Submission Date</p>
                                    <input class="input--style-1" type="text"  name="subdate" value="<?php echo $subdate;?>" readonly>
                                </div>
                            </div>
                        </div>


                        <div class="input-group">
                          <p>Assign Mark</p>
                            <input class="input--style-1" type="text"  name="mark" value="<?php echo $mark;?>">
                        </div>

                       
                        <input type="hidden" name="eid" id="textField" value="<?php echo $id;?>" required="required">
                        <input type="hidden" name="pid" id="textField" value="<?php echo $pid;?>" required="required">
                         <input type="hidden" name="points" id="textField" value="<?php echo $points;?>" required="required">
                        <input type="hidden" name="base" id="textField" value="<?php echo $base;?>" required="required">
                        <input type="hidden" name="bonus" id="textField" value="<?php echo $bonus;?>" required="required">
                        <input type="hidden" name="total" id="textField" value="<?php echo $total;?>" required="required">
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="update">Assign Mark</button>
                        </div>
                        
                    </form>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>
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
