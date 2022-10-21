<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Check Results </title>
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
        width: 100%;
        height: 20px;
        font-size: 10px;
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: black;

      }
.container{
  margin-left: 25%;
  margin-right: 25%;
}
      .btn{
        background-color: #FF0080;
        color: white;
        border: none;
        height: 30px;
        box-sizing: border-box;
        width: 101.4%;
      }
      p a{
        float: right;
        color: white;
        text-decoration: none;
        background-color: #FF0080;
        padding: 5px;
        border-radius: 3px;
      }
      .imgs{
        width: 50%;
        margin-left: 25%;
      }
      .quote{
        text-align: center;
        padding: 40px;
        font-size: 20px;
        font-family: cursive;
      }
      .tag{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        float: right;
        color: red;

      }
    </style>


</head>
<p><a href="adminlogin.php">Admin LOGIN</a></p>
<br><br>
<img class="imgs" src="2.jpg" alt="">

		<h1 >Check Result</h1>


		<form method="post" action="check.php" class="container">
			<p><input type="number" name="roll" placeholder="Enter roll number "></p>
			<p><input type="text" name="class" placeholder="Enter Your Class"></p>
      <p><input type="text" name="section" placeholder="Enter Your Section"></p>
			<p><input class="btn" type="submit" value="Check Result" class="btn btn-success btn-block"></p>
</form>	



<p class="quote">A single sheet of paper can't decide your future. <br> but the degree does!</p>


   <br>   <br><br><br><br><br><br>

<p class="tag">Created by Harshal Bondre</p>
        


</body>
</html>