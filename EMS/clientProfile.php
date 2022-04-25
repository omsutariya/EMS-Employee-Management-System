<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `client` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);


$id = (isset($_GET['id']) ? $_GET['id'] : '');
$sql = "SELECT * from `client` WHERE id=$id";
$sql2 = "SELECT total from `salary` WHERE id = $id";
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

    <title>Client Profile | Client Panel | XYZ Corporation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 
 </head>
 <body bgcolor="#F0FFFF">
     
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
     </header>
    <div class="container">
        <div class="card">
            <div class="alert alert-light" role="alert">
                HERE'S YOUR PROFILE CLIENT! KINDLY HAVE A LOOK.
            </div>
            <form method="POST" action="clientprofileup.php?id=<?php echo $id?>" >
                <div class="card" >
                  <img src="process/<?php echo $pic;?>" height = 150px width = 150px>
                </div>
                <div>
                <p class="input--style-1">CLIENT NAME: &nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $firstname;?> <?php echo $lastname;?></strong></p>
                
                
                
                <p class="text-xl-START">CLIENT ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $cliid;?></strong></p>
               


                <p class="text-xl-START">DATE OF BIRTH: &nbsp;&nbsp;&nbsp;<strong><?php echo $birthday;?></strong></p>

                <p class="text-xl-START">EMAIL ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $email;?></strong></p>

               
                <p class="text-xl-START">CONTACT NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $contact;?></strong></p>
               
                <p class="text-xl-START">ORGANIZATION:&nbsp;&nbsp; <strong><?php echo $org;?></strong></p> 
                <p class="text-xl-START">RESIDENCE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><?php echo $address;?></strong></p>

                <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div>
                            <button class="btn btn-dark" name="send" >Update Info</button>
                        </div>
                        
                    </form>
        </div>
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

