<?php
$conn=new mysqli("localhost", "root", "", "results");
$roll = $_POST['roll'];
$class = $_POST['class'];
$section = $_POST['section'];
$res = $_POST['res'];
$english = $_POST['english'];
$maths = $_POST['maths'];
$language1 = $_POST['language1'];
$science = $_POST['science'];
$computer = $_POST['computer'];


echo $roll;

$sql = "INSERT INTO roll (roll,class,section,res,english,maths,language1,science,computer) VALUES ('$roll','$class','$section','$res','$english','$maths','$language1','$science','$computer')";

if (mysqli_query($conn, $sql)) {
        header("location:resultadd.php");
     }



?>