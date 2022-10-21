

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>result</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
body{
        background-color: #B4FEE7;
        color: black;
        font-family: Georgia, 'Times New Roman', Times, serif;
      }
      h1{
        font-size: 30px;
        text-align: center;
      }
h3{
  text-align: center;
  
}
h2{
  text-align: center;
  font-size: 40px;
  display: inline;
  padding: 10px;
  

}
.welcome{
  font-size: 20px; 
}
.imgs{
  width: 60%;
        margin-left: 20%;
}
p{
  font-family: Georgia, 'Times New Roman', Times, serif;

  text-align: center;
}
.result{
  font-size: 30px;
}
hr{
  width: 50%;
}
div{
  text-align: center;
}
p a{
        float: right;
        color: #4E4F50;
        text-decoration: none;
        background-color: #A16AE8;
        padding: 5px;
        border-radius: 3px;
      }
      .tag{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        float: right;
        color: red;

      }
        </style>
    </head>
    <body>
    <p><a href="index.php">Back</a></p><br>
<h1> Your result here</h1>

<hr>



<p class="welcome">Welcome Student</p>

<?php
session_start();


if($_SESSION['loggedIn']!=True){

  header("location:index.php");
}
  $conn = new mysqli("localhost", "root", "","results");
  $query = "SELECT * FROM roll where roll ='".$_SESSION['rollnumber']."' ";
  $result = $conn->query($query);



  echo "<h3>Your Roll Number is : ".$_SESSION['rollnumber']."</h3>";


  $data = $result->fetch_object();

    echo "<div><h2 >$data->res</h2></div>";

  echo "<h3>Here is the summery of your result :</h3>";

  echo "<h3>";

  echo "<br><p> English : ".$data->english."</p>";
  echo "<br><p> Maths : ".$data->maths."</p>";
  echo "<br><p> Language : ".$data->language1."</p>";
  echo "<br><p> Science : ".$data->science."</p>";
  echo "<br><p> Computer : ".$data->computer."</p>";

  echo "</h3>";
  


  
?>


<hr>
<br>   <br><br><br><br><br><br>

<p class="tag">Created by Harshal Bondre</p>

    </body>
</html>