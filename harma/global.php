
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">

<!-- g-fonts -->


<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

<!-- g-font  awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="text-warning">Medi</span>cine
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#pharma">pharmaceuticals</a></li>
              <li><a class="dropdown-item" href="#hygenic">Nutritions & Vitamins</a></li>
              <li><a class="dropdown-item" href="women.php">Women Care</a></li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#reg">Telemedicine Health Center</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#reg">Health Care🪬</a>
          </li>
          <?php
            if(isset($_COOKIE['user'])){

              echo' <li class="nav-item">
              <a class="nav-link" href="profile.php">profile</a>';
              


              }
               else{

                
                echo' <li class="nav-item">
                <a class="nav-link" href="login.php">Log In</a>';
           echo'  <li class="nav-item">
           <a class="nav-link"href="signup.php">sign up</a>';
               }
               
               ?>


          </li>
        </ul>
        <?php
            if(isset($_COOKIE['user'])){
        echo' <form class="d-flex" role="search" method="POST" action="src.php">
              <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="valueToSearch" REQUIRED>
              <button class="btn btn-outline-success" type="submit" name="search">Search</button>
            </form>';
          }
            ?>
      
      </div>
    </div>
  </nav>
  
</body>
</html>






