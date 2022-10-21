<?php 
$conn=new mysqli("localhost", "root", "", "results");
$email = $_POST["email"];
$password = $_POST["password"];



$q = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result=$conn->query($q);
if($result->num_rows==1){
	$data=$result->fetch_object();
	if($data->email==$email && $data->password==$password){
		session_start();
		$_SESSION['loggedIn']=True;
		


		header("location:resultadd.php");
		
	}
	else{
		header("location:adminlogin.php"); 
	}
}
else{
	header("location:adminlogin.php"); 
}
 ?>

