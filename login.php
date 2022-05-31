<?php 
session_start();
include('database.php');

 if(isset($_POST['login'])){
  $username = $_POST['username'];
  $pwd = $_POST['password'];
  $password = md5($pwd);

   $select = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
   $query = mysqli_query($link, $select);

   if(mysqli_num_rows($query) > 0)
   {
    while($row = mysqli_fetch_array($query)){
       $_SESSION['username'] = $row['username'];
       $_SESSION['userid'] = $row['id'];
       $_SESSION['name'] = $row['name'];
       $_SESSION['image'] = $row['image'];
       
       // header("location:index.php");
       echo "<script>window.open('index.php','_self')</script>";
    }
    
   } else{
     // header("location:login.php?insert=unsuccessful");
    echo "<script>window.open('login.php?insert=unsuccessful','_self')</script>";
   }
 
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>
     
     <style>
          form *{
               color: #fff;
          }
     </style>

        <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <!-- Fontawsome Icon offline link -->
      <link href="./icons/font-awesome/css/font-awesome.min.css" rel="stylesheet"> 

      <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>
<body>
<section class="vh-100" style="background: linear-gradient(90deg, rgba(88,63,157,1) 0%, rgba(2,0,38,1) 53%, rgba(113,89,177,1) 100%);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; background:#5b50b2">
          <div class="row g-0">
            <div class="col-md-6 col-lg-6 d-none d-md-block">
              <img src="images/img2.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height:630px" />
            </div>
            <div class="col-md-6 col-lg-6 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

              <form action="" method="POST">

                  <div class="d-flex align-items-center mb-3 pb-1">
                  <p><i class="fa fa-unlock-alt" style="color:#cc6600; font-size:70px" aria-hidden="true"></i></p>  
                    <span class="h1 fw-bold mb-0 ms-3">Ecommerce</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color:#fff">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="form2Example17" name="username" class="form-control form-control-lg" placeholder="email or username" required />
                    <!-- <label class="form-label" for="form2Example17">Email address</label> -->
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example27" name="password" class="form-control form-control-lg"  placeholder="password" required/>
                    <!-- <label class="form-label" for="form2Example27">Password</label> -->
                  </div>

                  <div class="pt-1 d-grid gap-2 mb-4">
                    <input type="submit" class="btn btn-dark btn-lg btn-block"  name="login" value="Login">
                  </div>

                  <!-- **********-Alerts Row-********* -->
                  <div class="row">                       
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #fff;">Don't have an account? <a href="signup.php" class="text-danger">Click here</a>

                  <!-- <a class="small text-white" href="#!">Forgot password?</a>
                      style="color: #393f81;">Register here</a></p> -->
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

   <!-- ************-Alert Section-********* -->
<?php 
    if(isset($_GET['insert']) && $_GET['insert'] == 'unsuccessful'){ ?>
    echo '<script type="text/javascript">toastr.error("Invalid Username Or Password")</script>';
    <?php } 
  ?>
  <?php 
    if(isset($_GET['session']) && $_GET['session'] == 'unset'){ ?>
    echo '<script type="text/javascript">toastr.error("Session Unset")</script>';
    <?php } 
  ?>
  <?php 
    if(isset($_GET['register']) && $_GET['register'] == 'success'){ ?>
    echo '<script type="text/javascript">toastr.success("Registerd Successfully")</script>';
    <?php } 
  ?>
           

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>