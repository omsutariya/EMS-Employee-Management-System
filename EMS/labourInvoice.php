<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `client` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);


$id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql = "SELECT * from `client` WHERE id=$id";
$sql2 = "SELECT * from `project` WHERE ciid = $id";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn , $sql2);


  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $firstname = $res['firstName'];
  $lastname = $res['lastName'];
  $cliid = $res['id'];
  $email = $res['email'];
  $contact = $res['contact'];
  $address = $res['address'];
  $gender = $res['gender'];
  $birthday = $res['birthday'];
  $org = $res['organization'];
  $pic = $res['pic'];
}
}


?>
<!doctype html>
<html lang="en">

<head>
	<title>Client Panel | DORA Corporation</title>
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
                 <li><a class="homeblack" href="clientProfile.php?id=<?php echo $id?>"><button type="button" class="btn btn-primary">My Profile</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                 <li><a class="homeblack" href="clientproject.php?id=<?php echo $id?>"><button type="button" class="btn btn-primary">My Projects</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                 <li><a class="homeblack" href="labourInvoice.php?id=<?php echo $id?>"><button type="button" class="btn btn-primary">Invoice</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
                 <li><a class="homeblack" href="clientLogin.html"><button type="button" class="btn btn-primary">Log Out</button></a></li>&nbsp;&nbsp;&nbsp;&nbsp;
             </ul>
         </nav>
<body>

    <div class="container">
        <div class="card">
            <div class="card-header">
                Invoice
                <strong>
                    <DD>
                        <MM>
                            <YYYY></YYYY>
                </strong>
                <span class="float-right">

            </div>
            <div class="card-body">
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <h6 class="mb-3">From:</h6>
                        <div>
                            <strong>DORA</strong>
                        </div>
                        <div>CHARUSAT UNIVERSITY</div>
                        <div>CHANGA, ANAND</div>
                        <div>Email: infodora@gmail.com</div>
                        <div>Phone: +91 99 999 99999</div>
                    </div>

                    <div class="col-sm-6">
                        <h6 class="mb-3">To:</h6>
                        <div>
                            <strong>CLIENT NAME: <?php echo $firstname;?> <?php echo $lastname;?></strong>
                        </div>
                        <div>Address: <?php echo $address;?></div>
                        <div>Email: <?php echo $email;?></div>
                        <div>Phone: <?php echo $contact;?></div>
                    </div>



                </div>

                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th align="center">Item No.</th>
                                <th>Project Id</th>
                                <th>Project Name</th>
                                <th>Employee ID of the one who created:</th>
                                <th>Employee who created:</th>
                                <th class="right"><strong>Payable</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $ind =1;
                            while($res = mysqli_fetch_assoc($result2)){
                                if ($res['status']=="Submitted")
                                {
                                    echo "<tr>";
                                    
                                    echo "<td>".$ind."</td>";
                                    echo "<td>".$res['pid']."</td>";
                                    echo "<td>".$res['pname']."</td>";
                                    echo "<td>".$res['eid']."</td>";
                                    $eid = $res['eid'];
                                    $sql3 = "SELECT * from `employee` WHERE id=$eid";
                                    $result3 = mysqli_query($conn , $sql3);
                                    if($result3){
                                    while($res1 = mysqli_fetch_assoc($result3)){
                                    echo "<td>".$res1['firstName']." ".$res1['lastName']."</td>";
                                    echo "<td>"."1000"."</td>";

                                    $ind+=1;
                                        }
                                    }
                                }
                              }

			?>
                           
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="right"><?php echo (($ind-1)*1000)?></td>
                                </tr>
                                <tr>
                                <tr>
                                    <td class="left">
                                        <strong>Tax (10%)</strong>
                                    </td>
                                    <td class="right"><?php echo ((($ind-1)*1000)/10)?></td>
                                </tr>
                                <tr>
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
                                        <strong><?php echo ((($ind-1)*1000)+((($ind-1)*1000)/10))?></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class="d-grid gap-2">
    </div>
    <footer class="footer mt-auto py-3 bg-light">
        <!--Footer-->
        <div class="container">
            <span class="text">Contact No: 99999999999</span>
            <br>
            <button type="button" class="btn btn-link">infodora@gmail.com</button>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>