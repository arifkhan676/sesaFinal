
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

<?php
    require_once ('global.php');
?>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/wb.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h1> Welcome to Medica <br> pharmaceuticals  and Health Care</h1>
          <!-- <p>Welcome to Medica pharmaceuticals and Health Care </p> -->
          <?php
            if(isset($_COOKIE['user'])){


              echo' <p > <a href="product.php" class="btn btn-warning mt-3" > Looking for goods</a> </p>';

              }
               else{
                  echo' <p > <a href="cproduct.php" class="btn btn-warning mt-3" > Looking for goods</a> </p>';

               }
               ?>



        </div>
      </div>
      <div class="carousel-item">
        <img src="images/p1.png" class="d-block w-100" alt="...">
        <div class="carousel-caption ">
          <h1>Order in affordable prices</h1>
          <p> Reach to your door and give best services </p>
          <p> <a href="product.php" class="btn btn-warning mt-3" >Health Care</a> </p>
        </div>
      </div>

      <?php
            if(isset($_COOKIE['user'])){


              echo' <div class="carousel-item">
              <img src="images/wb2.webp" class="d-block w-100" alt="...">
              <div class="carousel-caption ">
                <h5>Technology Focus </h5>
                <p>Personalized by our experts</p>
                <p> <a href="product.php" class="btn btn-warning mt-3">Visit to shop</a> </p>

              </div>
              </div>';

              }
               else{
                  echo' <div class="carousel-item">
                  <img src="images/wb2.webp" class="d-block w-100" alt="...">
                  <div class="carousel-caption ">
                    <h1>Technology Focus </h1>
                    <p>Personalized by our experts</p>
                    <p> <a href="cproduct.php" class="btn btn-warning mt-3">Visit to shop</a> </p>

                  </div>
                  </div>';

               }
               ?>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <section class="Product">
    <div class="container py-5">
      <div class="row py-5">
        <div class="col-lg-5 m-auto">
          <h1 >Whats Tranding</h1>
          <h6 >Various Product listing</h6>
        </div>
      </div>

      <div class="container categories">
      <div class="row">
        <div class="col-md-4">
          <div class="med1 d-flex justify-content-between align-items-center">
          <h1>Hygenic</h1>
          <img src="images/hy.jpg" alt="">

        </div>
        </div>
        <div class="col-md-4">
          <div class=" med2 d-flex justify-content-between align-items-center">
          <h1>Diaper</h1>
          <img src="images/twinkle.jpg" alt="">
        </div>
            </div>
        <div class="col-md-4 ">
          <div class="med3 d-flex justify-content-between align-items-center">
          <h1>Moov</h1>
          <img src="images/moov.jpg" height="120px" alt="">
        </div>
      </div>
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


<?php
require_once('explore.php');
?>



  <section class="card-Deck">
    <div class="container" id="shoes">
      <div class="row py-5">
        <div class="col-lg-5 m-auto">

          <h1 >Health Care Machinary</h1>
          <h6 >Various Product listing</h6>
        </div>
      </div>

      <div class="card-group">
        <div class="card">

          <img  src="images/suger.jpg" class="card-img-top" height="300px" width="50px" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sugar Machine</h5>
            <p class="abp">This is a wider card with supporting text below as a natural text below as a natural  lead-in to additional content. This content is a little bit longer.</p>
            <h4> ৳ 599 </h4>

            <?php
       if(isset($_COOKIE['user'])){

        echo'
        <a href="product.php" class="btn btn-primary">Buy Now >></a>
        ';
       }
       else{

        echo'
        <a href="cproduct.php" class="btn btn-primary">Buy Now >></a>
        ';
       }
    ?>
          </div>
          <div class="card-footer">
            <small class="text-muted">Available Now</small>
          </div>
        </div>
        <div class="card">
          <img src="images/bloodp.jpg" class="card-img-top"  height="300px" width="50px" alt="...">
          <div class="card-body">
            <h5 class="card-title">Digital BP Machine</h5>
            <p class="abp">This card text below as a natural  has supporting text text below as a natural  below as a natural lead-in to additional content.</p>
            <h4> ৳ 899 </h4>


             <?php
       if(isset($_COOKIE['user'])){

        echo'
        <a href="product.php" class="btn btn-primary">Buy Now >></a>
        ';
       }
       else{

        echo'
        <a href="cproduct.php" class="btn btn-primary">Buy Now >></a>
        ';
       }
    ?>

          </div>
          <div class="card-footer">
            <small class="text-muted">Available Now</small>
          </div>
        </div>
        <div class="card">
          <img src="images/weightM.jpg" class="card-img-top" height="300px" width="50px" alt="...">
          <div class="card-body">
            <h5 class="card-title">Weight Machine Home</h5>
            <p class="abp">This is a wider card with supporting as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          <h4>৳ 1299 </h4>

          <?php
       if(isset($_COOKIE['user'])){

        echo'
        <a href="product.php" class="btn btn-primary">Buy Now >></a>
        ';
       }
       else{

        echo'
        <a href="cproduct.php" class="btn btn-primary">Buy Now >></a>
        ';
       }
    ?>


          </div>
          <div class="card-footer">
            <small class="text-muted">Available Now</small>
          </div>
        </div>
      </div>

    </div>

  </section>


  <section id="hygenic">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-lg-3 m-auto mb-5">
        <h1>Health Care Tips</h1>
        <h6>Here we provide some Health care tips</h6>
      </div>
    <div class="row">
      <div class="col-lg-4">
        <img class="mid-pic" src="images/hy.jpg" alt="">
        <h5 class="mt-3" >Hygenic Product</h5>
        <p class="abp">Healthcare/hygiene products are usually available over the counter and normally used for hygienic purposes to prevent infection and transmission of diseases, provide hygiene, and
           enhance care in the  operating room .</p>
      </div>

      <div class="col-lg-4">
        <img class="mid-pic" src="images/saladP.jpg"  alt="">
        <h5 class="mt-3">Green vegetables</h5>
        <p class="abp"> vegetable that’s singled out as the veg of choice for bodybuilders. You only have to look at a few sample meal plans for bodybuilders, aimed at both
          cutting and bulking, and you’ll see broccoli mentioned.</p>
      </div>

      <div class="col-lg-4">
        <img class="mid-pic" src="images/body.jpg" height="270px" alt="">
        <h5 class="mt-3" >Masculine Body</h5>
        <p class="abp">What are the best bodybuilding supplements for
          hardgainers? It can be such a dismay when you’re too scrawny and people don’t believe that you train for 5 days a week.</p>
      </div>

      <p  > <a href="healthcare.php" class="btn btn-warning mt-3"> CLICK FOR MORE READS </a> </p>

    </div>
  </div>
</div>
</section>

<?php
require_once('explore.php');
?>


<section id="womenCare">
<?php
require_once('women.php');
?>
</section>



<?php
require_once('personal.php');
?>


<section class="contact py-5" >
  <div class="container py-5">
    <div class="row ">
      <div class="col-lg-5 m-auto text-center">
        <h1> Contact Us</h1>
        <h6>Always be in touch with us</h6>
      </div>
    </div>

    <div class="row py-5">
      <div class="col-lg-9 m-auto ">
        <div class="row">
          <div class="col-lg-3">
            <h5>Location</h5>
            <p class="abp" >Badda,Dhaka</p>

            <h5>Email</h5>
            <p class="abp">arifulhasan49@gmail.com</p>
            <p class="abp">tajul07@gmail.com</p>
            <p class="abp">Rafsan259@gmail.com</p>


            <h5>Number</h5>
            <p class="abp">01811225515</p>
            <p class="abp">Medica pharmaceuticals</p>
          </div>

          <div class="col-lg-7">
            <div class="row">
              <div class="col-lg-6">
                <input type="text" class="form-control-bg-light" placeholder="First Name" name="" value="">
              </div>
              <div class="col-lg-6">
                <input type="text" class="form-control-bg-light" placeholder="Last Name" name="" value="">
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 py-3">
                <textarea name="name" class="form-control-bg-light" placeholder="Enter your message" cols="80"  rows="10" ></textarea>
              </div>
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
          </div>

        </div>
      </div>
    </div>
</section>



<section class="join py-5" id="reg">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-9 m-auto text-center">
        <h1>Join our Health care</h1>
        <input class="px-3" type="text" placeholder="Email us for registration">
        <button class="btn2" type="button" >Registration</button>
      </div>
    </div>

    <div class="row py-5">
      <div class="col-lg-3">
        <h2>Customer care</h2>
        <p>Here is out list</p>
        <p>01811225515</p>
        <p>Dhaka,Bangladesh</p>
      </div>
      <div class="col-lg-3">
        <h2>Information Center</h2>
        <p>10678</p>
        <p>Medica49@gmail.com</p>
        <p>Bangladesh</p>
      </div>
      <div class="col-lg-3">
        <h2>About</h2>
        <p>Organized by abc</p>
        <p>Dhaka</p>
        <p>Bangladesh</p>
      </div>
      <div class="col-lg-3">
        <h2>Social Media</h2>
      <a href="https://www.facebook.com/mdariful.hasan.10690/">  <i class="font fab fa-facebook-f"></i>  </a>

   <a href="https://twitter.com/">   <i class="font fab fa-twitter"></i> </a>

       <a href="https://www.instagram.com/"><i class="font fab fa-instagram"></i>  </a>

      </div>
    </div>

  </div>
</section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
