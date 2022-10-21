<?php 
$conn=new mysqli("localhost", "root", "", "results");
$roll = $_POST['roll'];
$class = $_POST['class'];
$section = $_POST['section'];

$q = "SELECT * FROM roll WHERE roll='$roll' AND class='$class' AND section='$section'";
$result=$conn->query($q);
if($result->num_rows==1){
	$data=$result->fetch_object();
	if($data->email==$email && $data->password==$password){
		session_start();
		$_SESSION['loggedIn']=True;
		$_SESSION['rollnumber']= $roll;
		$_SESSION['class']= $class;
		$_SESSION['section']= $section;


		header("location:dashboard.php");
		
	}
	else{
		header("location:not.php"); 
	}
}
else{
	header("location:not.php"); 
}
 ?>

