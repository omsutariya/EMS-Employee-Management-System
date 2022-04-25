<?php

require_once ('dbh.php');

$email = $_POST['mailuid'];
$password = $_POST['pwd'];

$sql = "SELECT * from `client` WHERE email = '$email' AND password = '$password'";
$sqlid = "SELECT id from `client` WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);
$id = mysqli_query($conn , $sqlid);

$empid = "";
if(mysqli_num_rows($result) == 1){
	
    $client = mysqli_fetch_array($id);
	$cliid = ($client['id']);
	

	//echo ("logged in");
	//echo ("$empid");
	
	header("Location: ..//clientProfile.php?id=$cliid");
}

else{
	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email or Password')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
}
?>
