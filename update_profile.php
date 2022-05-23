<?php include('database.php');

   if(isset($_POST['submit'])){  

   $target = "db_images/".basename($_FILES['image']['name']);    
   $name = mysqli_real_escape_string($link, $_POST['Name']);
   $image = $_FILES['image']['name'];
  

    if($image == null || $image == ''){
        $image = $_POST['image2'];
        }
          session_start();
    $update = "UPDATE users set name = '$name', image = '$image' where id = ".$_SESSION['userid']."" or die("insert query errorr");
              
        $query = mysqli_query($link, $update);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
           
        if($query){              
           // echo "<div class='alert alert-success'>Post Updated...</div>";
            header("location:profile.php?profile=updated");
              }
              else{
               echo '<div class="alert alert-danger text-center col-md-4 offset-5">Something went wrong</div>';
              }
            }    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Update Profile</title>
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

        <div class="row">
   	        <div class="col-md-6 offset-2">
                 <h2>UPDATE PROFILE</h2>
      
        <?php           
            $select = "SELECT * FROM users where id = ".$_SESSION['userid']."";
            $selection = mysqli_query($link, $select);

            if(mysqli_num_rows($selection) > 0){
            while($row = mysqli_fetch_array($selection)){
        ?>
         
<form class="row g-3" method="post" enctype="multipart/form-data">
  <div class="col-md-6">
  <label for="title" class="form-label">Name:</label>
    <input type="text" class="form-control" id="title" name="Name" required value="<?php echo $row['name']; ?>">
  </div>
  <div class="col-md-6">
  <label for="img">Profile Picture</label><br>
   <input type="file" name="image" id="img" class="form-control" value="<?php echo $row['image']; ?>">
    <input type="hidden" name="image2" value="<?php echo $row['image']; ?>">
  </div>
    <div class="col-12">
    <button type="submit" name="submit" class="btn btn-block btn-primary">Update</button>
  </div>
</form>
         <?php } } ?>

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