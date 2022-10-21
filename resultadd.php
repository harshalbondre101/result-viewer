<?php
session_start();


if($_SESSION['loggedIn']!=True){

  header("location:adminlogin.php");
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
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
      p input{
        width: 50%;
        margin-left: 25%;
        height: 20px;
        font-size: 10px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: black;

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
        <h1>Hello Teach</h1>



        <form action="add.php" method="post">
        <p><input type="number" name="roll" placeholder="Roll" ></p>
        <p><input type="text" name="class" placeholder="Class" value="2"></p>
        <p><input type="text" name="section" placeholder="Section" value="a"></p>
        <p><input type="text" name="res" placeholder="Resut" value="Pass"></p>
        <p><input type="number" name="english" placeholder="English"></p>
        <p><input type="number" name="maths" placeholder="Maths"></p>
        <p><input type="number" name="language1" placeholder="Language"></p>
        <p><input type="number" name="science" placeholder="Science"></p>
        <p><input type="number" name="computer" placeholder="Computer"></p>
        <p><input type="submit" name="Submit"></p>
        </form>

        
        <br>   <br><br><br><br><br><br>

<p class="tag">Created by Harshal Bondre</p>   

    </body>
</html>