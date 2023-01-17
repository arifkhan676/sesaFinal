
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Trial Web Pharma</title>

  <link rel="stylesheet" href="css/styles.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">

  <!-- g-fonts -->

  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

  <!-- g-font  awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/ee60d4f9a6.js" crossorigin="anonymous"></script>

</head>

<body>

<section class="women">
<div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-3 m-auto mb-5">
        <h1>Personal Care</h1>
        <h6>Products Listing</h6>
      </div>
    </div>

    <div class="row">

    <div class="col-lg-3">
        <div class="card border-0  mb-4">
          <div class="card-body">
            <img class="mid-pic" src="images/bandage.jpg" height="190px" alt="">
          </div>
        </div>
        <h6  >Bandage</h6>
        <p  > <a  class="btn btn-warning mt-3"> ৳ 20 </a> </p>
      </div>
      <div class="col-lg-3">
        <div class="card border-0  mb-4">
          <div class="card-body">
            <img class="mid-pic" src="images/wood.jpg" height="190px" alt="">
          </div>
        </div>
        <h6  >Gripe Water</h6>
        <p  > <a  class="btn btn-warning mt-3" > ৳ 39 </a> </p>
      </div>
            <div class="col-lg-3">
        <div class="card border-0 mb-4">
          <div class="card-body">
            <img class="mid-pic" src="images/menPro.jpg" alt="">
          </div>
        </div>
        <h6 >Suns Cream for Men</h6>
        <p > <a class="btn btn-warning mt-3">৳ 170 </a> </p>
      </div>

      <div class="col-lg-3">
        <div class="card border-0 mb-4">
          <div class="card-body">
            <img class="mid-pic" src="images/dental.jpg" alt="">
          </div>
        </div>
        <h6  >Dental Floss</h6>
        <p  > <a  class="btn btn-warning mt-3"> ৳ 699 </a> </p>
      </div>

  

    </div>



  <?php
       if(isset($_COOKIE['user'])){

        echo'
        <div class="row">
        <div class="col-lg-6 text-center m-auto">
        <p  > <a href="product.php" class="btn btn-warning mt-3"> CLICK FOR MORE PRODUCTS.. </a> </p>
        </div>
      </div>
       </div>';
       }
       else{

        echo'
        <div class="row">
        <div class="col-lg-6 text-center m-auto">
        <p  > <a href="cproduct.php" class="btn btn-warning mt-3"> CLICK FOR MORE PRODUCTS.. </a> </p>
        </div>
      </div>
       </div>';
       }
    ?>



</section>


</body>
</html>

