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

<form method="get" action="logout.php">
<div class="login-page">
      <div class="form">
      <div class="login">
          <div class="login-header">
           <img src="images/profile.png" height="150px" weight="150px" alt="">
            <h3>My Profile</h3>
            <p>Want to grab some discount?</p>
            <a href="product.php" class="btn btn-primary">Go To Shop</a>

          </div>
        </div>

       

  <button type="submit"  class="btn btn-outline-danger">Log Out</button> <br><br>
  </div>
 </div>
</form>




</body>
</html>
