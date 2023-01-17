
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


<section classclass="signUp">

 <div class="login-page-pro">
      <div class="form-pro">
      <div class="login">
          <div class="login-header">
            <p>Please enter your credentials to login.</p>
          </div>
        </div>

<div class="wbody">
  <u><h2 class="text-center">Sign Up</h2></u> 
    <div class="signupbox">
        <form method="post" action="csignup.php" enctype="multipart/form-data">
        <div class="container">
        <div class="row">
            <div id="col1" class="col">
                <p class="abp" >Enter Your  Fullname</p>
                <input  class="form-control" type="text" placeholder="Fullname" name="fullname" required></input><br>
                <p class="abp" >Enter Your  Address </p>
                <input  class="form-control" type="text" placeholder="address" name="address" required></input><br>
                <p class="abp" >Enter Your  Age </p>
                <input  class="form-control" type="number" placeholder="Age" name="age" required></input><br>
                <p class="abp" >Enter Your  Gender </p>
                <select  class="form-control" type="input" name="gender" required>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                    </select><br>
                <p class="abp">Enter Your  Username</p>
           <input  class="form-control" type="text" placeholder="Username" name="username" required></input><br>
           <p class="abp">Enter Your  Password </p>
           <input  class="form-control" type="password" placeholder="Password" name="password" required></input><br>
           <p class="abp">Enter Your  Blood Group </p>
           <select  class="form-control" type="input" name="bldgrp" required>
           <option>A+</option>
           <option>A-</option>
           <option>B+</option>
          <option>B-</option>
           <option>O+</option>
           <option>O-</option>
           <option>AB+</option>
           <option>AB-</option>
           </select><br>
           <p class="abp">Enter Your  Email  </p>
           <input  class="form-control" type="email" placeholder="Email" name="email" required></input><br>
           <p class="abp">Enter Your  Phone Number </p>
           <input  class="form-control" type="tel" placeholder="Phone Number" name="number" required></input><br>
           <p class="abp">Enter Your pro-pic</p>
           <input   class="form-control" type="file" name="myimage">
           <p class="abp">Feedback</p>
           <div class="form-floating">
            <textarea class="form-control" id="floatingTextarea" name="feedback"></textarea>
            <label for="floatingTextarea">Feedback</label>
          </div><br>
          <button type="submit" class="btn btn-outline-danger">Sign Up</button>&emsp;
          <button type="reset" class="btn btn-outline-danger">Reset</button>
            </div>
            
        </div>
        </div>
        </div>
        </div>

    </form>
    </div>

    </section>

</body>
</html>
