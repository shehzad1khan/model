<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Traders List</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- ***** DataTable Links ****** -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
    
    <!-- ****** Online Bootstrap Links ****** -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

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
                <a href="index.html">
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
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">
                        <div class="drop-down   d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge gradient-1 badge-pill badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 New Messages</span>

                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Adam Smith</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Can you do me a favour?</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Barak Obama</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Hilari Clinton</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hello</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2 badge-primary">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>

                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Started</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Event Ended Successfully</h6>
                                                    <span class="notification-text">One hour ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events to Join</h6>
                                                    <span class="notification-text">After two days</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                                <span>English</span> <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html"><i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                        </li>

                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.html">Home</a></li>
                            <li><a href="./report.php">Report</a></li>
                        </ul>
                    </li>                   
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <!-- <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div> -->
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                                <!---- Alert Record Inserted ---->
                                <?php if (isset($_GET['record']) && $_GET['record'] == 'inserted') { ?>
                                <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
                                    <strong>Success!</strong> Record inserted successfully.
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <?php } ?>

                                <!---- Alert Record Deleted ---->
                                <?php if (isset($_GET['record']) && $_GET['record'] == 'deleted') { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> Record Deleted successfully.
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <?php } ?>
                                <!---- Alert Record Updated ---->
                                <?php if (isset($_GET['record']) && $_GET['record'] == 'updated') { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> Record Updated successfully.
                                    <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <?php } ?>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-success mt-3 add">Add <i class="bi bi-plus-square-fill text-white"></i>
                                    </button>
                                <h3 class="offset-4">E-Commerce Business Traders</h3>

                                <!-- -- Table Start here -- -->
                                <table id="example" class="table border border-gray table-responsive table-hover table-info" style="width:auto">
                                    <thead>
                                        <tr>
                                            <th width="4%">Id</th>
                                            <th>Name</th>
                                            <th>Passport</th>
                                            <th>Contact</th>
                                            <th width="12%">Total Pay</th>
                                            <th width="14%">Advance Pay</th>
                                            <th width="11%">Due Pay</th>
                                            <th width="13%">Tracking Id</th>
                                            <th width="7%">Actions</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Passport</th>
                                            <th>Contact</th>
                                            <th>Total Pay</th>
                                            <th>Advance Pay</th>
                                            <th>Due Pay</th>
                                            <th>Tracking Id</th>
                                            <th>Actions</th>
                                        </tr>
                                        </tfooter>
                                </table>                        
                    </div>
                </div>
            </div>
            <!-- #/ container -->

<!--******* Form Modal start **********-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title offset-5" id="exampleModalLabel">ADD RECORD</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- --Dailog Form Tag-- -->
        <div class="modal-body">
          <form method="POST" action="../insert.php" id="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="0" id="id">
            <input type="hidden" name="action" value="insert" id="action">
            <div class="form-row">
              <div class="col">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="col">
                <label for="pass" class="col-form-label">Passport No:</label>
                <input type="text" class="form-control" id="passport" name="passport">
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="contact" class="col-form-label">Contact No:</label>
                <input type="text" class="form-control" id="contact" name="contact" >
              </div>
              <div class="col">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" id="email" class="form-control" name="email">
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="total" class="col-form-label">Total Payment:</label>
                <input type="text" onkeyup="cal()" id="total" class="input form-control" name="total">
              </div>
              <div class="col">
                <label for="advance" class="col-form-label">Advance Payment:</label>
                <input type="text"  onkeyup="cal()" id="advance" class="input form-control" name="advance">
              </div>
              <div class="col">
                <label for="due" class="col-form-label">Due Payment:</label>
                <input type="text" id="due" readonly class="form-control" name="due">
              </div>
            </div>
            <div class="form-row">
            <div class="col">
              <label for="tracking" class="col-form-label">Tracking Id:</label>
              <input type="text" id="tracking" class="form-control" name="tracking">
            </div>
            <div class="col">
              <label for="image" class="col-form-label">Picture:</label>
              <input type="file" id="image" class="form-control" name="image">
            </div>
            </div>
            <div class="form-group mr-auto mt-2">
              <input type="submit" class=" btn btn-success offset-9" name="submit" value="Submit" id="submit">
              <button type="button" class="btn btn-danger ml-2" data-bs-dismiss="modal">Close</button>
            </div>

          </form>
        </div>
        <!-- <div class="modal-footer">        
      </div> -->
      </div>
    </div>
  </div>
  <!-- -- Form Modal Ends Here-- -->
  <!-- ########################################################################### -->

  <!-- -- view modal start --  -->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">User Details</h5>
        </div>
        <div class="modal-body">
          
         <table class="table table-striped table-success border border-gray" id="table">
          
         </table>           
            
            <div class="d-flex">
              <button type="button" class="btn btn-danger me-auto p2" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning offset-8" data-bs-dismiss="modal"><b>Print</b></button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- --view modal End-- -->



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

    <!-- DataTable and Modal Scripts Links -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 

  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  
  <!-- ******* Scripts Start ******* -->
  <script>
   $(document).ready(function() {
      $('#example').dataTable({
        "processing": true,
        "ajax": "../fetch.php?view-list=1",
        "columns": [
            {data: 'id'},
            {data: 'name'},
            {data: 'passport_no'},
            {data: 'contact_no'},
            {data: 'total_payment'},
            {data: 'advance_payment'},
            {data: 'due_payment'},
            {data: 'tracking_id'},
            {data: 'action'}
        ]
    });

      // view Modal fucntion start
      $("#example").delegate(".view-data", "click", function(){
        var userid = $(this).data("id");
        
        $.ajax({
          url: '../fetch.php?view-id='+id,
          type: 'GET',
          success: function(response) {
            console.log(response);
            $('#table').html(response);
            $('#exampleModal2').modal('show');
          }
        });                
      });

      $("#example").delegate(".edit-data", "click", function(){
        var userid = $(this).data("id");

        $.ajax({
          url: "../fetch.php?id=" + userid,
          method: "GET",
          data: {
            userid: userid
          },
          dataType: "json",
          success: function(data) {
            console.log(data);
            $('#exampleModal').modal('show');
            $('#id').val(data.id);
            $('#name').val(data.name);
            $('#passport').val(data.passport_no);
            $('#contact').val(data.contact_no);
            $('#email').val(data.email);
            $('#total').val(data.total_payment);
            $('#advance').val(data.advance_payment);
            $('#due').val(data.due_payment);
            $('#tracking').val(data.tracking_id);
            $('#action').val('update');
            $('#submit').val("Update");
            $('#exampleModalLabel').html("Update Record");
          }
        });
      });
      

      $('.add').on('click', function() {
        $('#form')[0].reset();
        $('#exampleModal').modal('show');
        $('#action').val('insert');
        $('#id').val('0');
        $('#exampleModalLabel').html("Add Record");
        $('#submit').val("Submit");
      }); 
      
      $("#toastr-success-top-right").on("click",function(){toastr.success("This Is Success Message","Top Right",{timeOut:5e3,closeButton:!0,debug:!1,newestOnTop:!0,progressBar:!0,positionClass:"toast-top-right",preventDuplicates:!0,onclick:null,showDuration:"300",hideDuration:"1000",extendedTimeOut:"1000",showEasing:"swing",hideEasing:"linear",showMethod:"fadeIn",hideMethod:"fadeOut",tapToDismiss:!1})});


    });
    function cal(){
      
      var total = $('#total').val();
      var advance = $('#advance').val();
      var due = total - advance;
      $('#due').val(due);
    }

</script>

</body>

</html>