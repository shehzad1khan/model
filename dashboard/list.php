<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- DataTable -->

    <link rel="stylesheet" href="./plugins/datatables/jquery.dataTables.min.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

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
                    <button class="btn btn-sm btn-success add">Add</button>
                    <div class="col-lg-12 col-sm-12">
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
                            </tfoot>
                        </table> 
                    </div>
                </div>

            </div>
            <!-- #/ container -->
        </div>


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
                  <form method="POST" action="insert.php" id="form" enctype="multipart/form-data">
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
              </div>
            </div>
        </div>
          <!-- -- Form Modal Ends Here-- -->

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
                    </div>
                  </div>
                </div>
            </div>
              <!-- --view modal End-- -->
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
    <script src="plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="./js/dashboard/dashboard-1.js"></script>
  <!-- ******* Scripts Start ******* -->
  <script>
   $(document).ready(function() {
      $('#example').dataTable({
        "processing": true,
        "ajax": "fetch.php?view-list=1",
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
          url: 'fetch.php?view-id='+id,
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
          url: "fetch.php?id=" + userid,
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