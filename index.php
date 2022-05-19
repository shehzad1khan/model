<?php
    include('database.php');                 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Index Page</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">    


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

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Today Entries</h3>
                                <div class="d-inline-block">
                                    
                                    <?php
                                     $query = "SELECT * FROM traders WHERE date = curdate()";
                                     $result = mysqli_query($link, $query);
                                     $count = mysqli_num_rows($result);         
                            
                                    if($count > 0){
                                        echo '<h2 class="text-white mb-0">'.$count.'</h2>';
                                    }else{
                                        echo '<h2 class="text-white mb-0">0</h2>';
                                    }
                                    ?>

                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="bi bi-pie-chart-fill"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">This Week Entries</h3>
                                <div class="d-inline-block">

                                <?php
                                     $query = "SELECT * FROM traders WHERE date BETWEEN curdate() - INTERVAL 7 DAY AND curdate()";
                                     $result = mysqli_query($link, $query);
                                     $count = mysqli_num_rows($result);         
                            
                                    if($count > 0){
                                        echo '<h2 class="text-white mb-0">'.$count.'</h2>';
                                    }else{
                                        echo '<h2 class="text-white mb-0">0</h2>';
                                    }
                                    ?>

                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="bi bi-book"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">This Month Entries</h3>
                                <div class="d-inline-block">
                                    
                                <?php
                                     $query = "SELECT * FROM traders WHERE date BETWEEN curdate() - INTERVAL 30 DAY AND curdate()";
                                     $result = mysqli_query($link, $query);
                                     $count = mysqli_num_rows($result);         
                            
                                    if($count > 0){
                                        echo '<h2 class="text-white mb-0">'.$count.'</h2>';
                                    }else{
                                        echo '<h2 class="text-white mb-0">0</h2>';
                                    }
                                    ?>

                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="bi bi-ui-checks-grid"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Total Entries</h3>
                                <div class="d-inline-block">                            

                                <?php
                                     $query = "SELECT * FROM traders";
                                     $result = mysqli_query($link, $query);
                                     $count = mysqli_num_rows($result);         
                            
                                    if($count > 0){
                                        echo '<h2 class="text-white mb-0">'.$count.'</h2>';
                                    }else{
                                        echo '<h2 class="text-white mb-0">0</h2>';
                                    }
                                    ?>

                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
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



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>