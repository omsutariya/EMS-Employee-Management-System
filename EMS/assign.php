<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Assign Project | Admin Panel</title>

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




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Assign Project</h2>
                    <form action="process/assignp.php" method="POST" enctype="multipart/form-data">


    <br>                    

                         <div class="input-group">
                           <p>Employee ID<p style="color:red"> *</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>  <input class="input--style-1" type="text" placeholder="Employee ID" name="eid" required="required">
                        </div>




<br>
                            <div class="input-group">
                                <p>Client ID<p style="color:red"> *</p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> <input class="input--style-1" type="text" placeholder="Client ID" name="ciid" required="required">
                            </div>




                            <br>
                        <div class="input-group">
                        <p>Project name <p style="color:red"> *</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p> <input class="input--style-1" type="text" placeholder="Project Name" name="pname" required="required">
                        </div>
                        <br>
                        <div class="input-group">
                            <div class="input-group">
                                <div class="input-group">
                                <p>Due Date<p style="color:red"> *</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>    <input class="input--style-1" type="date" placeholder="date" name="duedate" required="required">
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                        
<br>


                        <div class="p-t-20">
                            <button class="btn btn-secondary btn-lg" type="submit">Assign</button>
                        </div>
                    </form>
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
<!-- end document-->
