<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>admin login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <style>
          body{
        background-color: #647C90;
        color: #E2DED0;
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

      .btn{
        width: 51%;
        background-color: white;
        border: none;
      }
      p a{
        float: right;
        color: #4E4F50;
        text-decoration: none;
        background-color: #E2DED0;
        padding: 5px;
        border-radius: 3px;
      }
      .tag{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        float: right;
        color: black;

      }
      </style>
    </head>
    <body>
    <p><a href="index.php">Back</a></p>
        <h1>Admin LOGIN</h1>

    <form action="check2.php" method="post">
<p><input type="text" name="name" placeholder="Name"></p>
<p><input type="email" name="email" placeholder="Email"></p>
<p><input type="password" name="password" placeholder="Password"></p>
<p><input type="submit" name="Login"></p>


<br>   <br><br><br><br><br><br>

<p class="tag">Created by Harshal Bondre</p>

    </form>
    </body>
</html>