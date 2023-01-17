<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


<?php



    if(isset($_COOKIE['error'])){
  echo'<p style="color:red">'.$_COOKIE['error'].'</p>';
  setcookie("error","",time()-10);
    }
    ?>

<form method="get" action="clog.php">
<div class="login-page">
      <div class="form">
      <div class="login">
          <div class="login-header">
            <h3>LOG IN</h3>
            <p>Please enter information to login.</p>
          </div>
        </div>
  <input class="form-control" type="username" placeholder="Enter your Username" name="username"><br>
  <input class="form-control" type="password" placeholder="Enter your Password" name="password">
  <input type="checkbox"  name="remember">Remember me<br>
  <button type="submit" class="btn btn-outline-danger">Log in</button> <br><br>
  
  <a href="signup.php">Don't have? Create an account </a>


  </div>
 </div>
</form>




</body>
</html>
