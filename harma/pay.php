
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

</head>
<body>
<?php
    require_once ('global.php');
?>


<form type="submit" action="#" >
<div class="login-page">
      <div class="form">
      <div class="login">
          <div class="login-header">
          <img src="images/profile.png" height="100px" weight="100px" alt="">

            <p>Customer Information<p>
            <input  class="form-control" type="name" placeholder="Name" name="name" required></input><br>
            <input  class="form-control" type="email" placeholder="Email" name="email" required></input><br>
            <input  class="form-control" type="address" placeholder="Address" name="address" required></input><br>
            <input  class="form-control" type="number" placeholder="Phone Number" name="number" required></input><br>
 
            <button type="submit"  class="btn btn-outline-dark" onClick="openPopup()">Confirm</button> <br><br>

          </div>
        </div>
   <div class="popup" id="popup" >
    <img src="images/tick.png" alt="">
     <h2>Thank You!</h2>
      <p>Your information has successfully submitted!</p>
      <button type="submit"  class="btn btn-outline-dark" onClick="closePopup()">Ok</button> 
      </div>
      </div>
</div>
</form>

<script>
let popup=document.getElementById("popup");
function openPopup(){
 popup.classList.add("open-popup");
}
function closePopup(){
 popup.classList.remove("open-popup");
}
</script>

</body>
</html>