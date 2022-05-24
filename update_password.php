<?php   
  include('database.php');

     if(isset($_POST['submit'])){
     $username = mysqli_real_escape_string($link, $_POST['username']);  
     $password = md5($_POST['password']);
     $cpassword = md5($_POST['cpassword']);

     $sql = "SELECT * from users WHERE username = '$username'";
      $query = mysqli_query($link, $sql);
      $row = mysqli_fetch_array($query);
      $rowcount = mysqli_num_rows($query);

      if( $rowcount < 1){
       echo '<div class="alert alert-danger text-center">Username does not exist</div>';
      } else{
     
     if($password == $cpassword){       
            $update = "UPDATE users SET password = '$password' WHERE username = '$username'";
            $query = mysqli_query($link, $update);
            
                header("location:profile.php?password=updated");                     
            }
            else{
                echo '<div class="alert alert-danger text-center">New Password and Confirm Password are not matched.</div>';
                }  
          
        } 
     }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Update Password</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.php">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php include('include/header.php'); ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include('include/sidenav.php'); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

        <div class="row ">
   	    <div class="col-md-6 offset-2 card">
   	  	<form action="" method="POST">
             <div class="mb-3 mt-3 offset-4">
             <h2><i>Recover Password</i></h2>
             </div>
    <div>         
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" autofocus id="username" placeholder="Your Username" name="username" required>
    </div>

  <div class="mb-3 mt-3">      
      <label for="pass" class="form-label">New Password:</label>
      <input type="password" class="form-control" autofocus id="pass" placeholder="************" name="password" required>
  </div>
  
  <div class="mt-3 mb-3">    
    <label for="cpass" class="form-label">Confirm Password:</label>
    <input type="password" class="form-control" id="cpass" placeholder="************" name="cpassword" required>
  </div>  
  
  <div>
  <input type="submit" class="btn btn-block btn-info form-control" name="submit" value="Change Password">  
  </div>

       </form>
   	  </div>
   </div>

            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>

</html>