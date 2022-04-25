<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `client` WHERE 1";

//echo "$sql";
$result = mysqli_query($conn, $sql);
if(isset($_POST['update']))
{

  $id = mysqli_real_escape_string($conn, $_POST['id']);
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
 


 $result = mysqli_query($conn, "UPDATE `client` SET `email`='$email',`contact`='$contact',`address`='$address' WHERE id=$id");

 echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated')
    window.location.href='clientProfile.php?id=$id  ';
    </SCRIPT>");

  
}
?>




<?php
  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `client` WHERE id=$id";
  $result = mysqli_query($conn, $sql);
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $firstname = $res['firstName'];
  $lastname = $res['lastName'];
  $email = $res['email'];
  $contact = $res['contact'];
  $address = $res['address'];
  $gender = $res['gender'];
  $birthday = $res['birthday'];
  }
}

?>

<html>
<head>
  <title>Update Profile | DORA Corporation</title>
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
  <div class="divider"></div>
  

    <!-- <form id = "registration" action="edit.php" method="POST"> -->
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Client Info</h2>
                    <form id = "registration" action="clientprofileup.php" method="POST">

<br>

                        <div class="input-group">
                          <p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>">
                        </div>
                       
                        <br>
                        <div class="input-group">
                          <p>Contact&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>">
                        </div>

                       <br>

                        
                         <div class="input-group">
                          <p>Address&nbsp;&nbsp;&nbsp;&nbsp;</p>
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>">
                        </div>

                       
                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn-secondary" type="submit" name="update">Submit</button>
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
