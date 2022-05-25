<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ecommerce-Report</title>
     
    <!-- Favicon icon -->
     <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/datepicker.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

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
                 <div class="col-md-12">
                 <table class="table table-striped table-hover" id="result">
                 <div class="offset-3 sale_filter">
                         <label>Search</label>
                         <label>From:</label>
                         <input type="text" name="from" id="from" placeholder="From Date">
                         <label>To:</label>
                         <input type="text" name="to"  id="to" placeholder="To Date">
                         <button type="button" value="Search" id="search" name="search" class="btn btn-primary btn-sm">Search</button>
                         <a href="pdf.php" style="display: none;" class="btn btn-danger btn-sm offset-2" id="printBtn">Print</a>
                     </div>
                   <thead class="bg-info text-white">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Passport</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Total Pay</th>
                      <th scope="col">Advance Pay</th>
                      <th scope="col">Due Pay</th>
                      <th scope="col">Track Id</th>
                      <th scope="col">Date</th>
                    </tr>
                  </thead>
                   <?php
                    include('database.php');
                    $sql = "SELECT * FROM traders";
                    $query = mysqli_query($link, $sql);
                    $rowcount = mysqli_num_rows($query);

                    for($j = 1; $j <= $rowcount; $j++){

                        $row = mysqli_fetch_array($query);                   
                     ?>

                  <tbody>
                    <tr>
                      <th><?php echo $j ?></th>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['passport_no'] ?></td>
                      <td><?php echo $row['contact_no'] ?></td>
                      <td><?php echo $row['total_payment'] ?></td>
                      <td><?php echo $row['advance_payment'] ?></td>
                      <td><?php echo $row['due_payment'] ?></td>
                      <td><?php echo $row['tracking_id'] ?></td>
                      <td><?php echo $row['date'] ?></td>
                    </tr>                   
                  </tbody>
                  <?php } ?>
                  <tfoot class="bg-info text-white">
                    <tr>
                    <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Passport</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Total Pay</th>
                      <th scope="col">Advance Pay</th>
                      <th scope="col">Due Pay</th>
                      <th scope="col">Track Id</th>
                      <th scope="col">Date</th>
                    </tr>
                  </tfoot>
                </table>
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
        <?php include('include/footer.php') ?>
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

    <script src="plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

  <!-- ***** Online script links ***** -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 

<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js" integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30=" crossorigin="anonymous"></script>


<script>

 $(document).ready(function() {
    $.datepicker.setDefaults({
    dateFormat: 'yy-mm-dd',
});

$(function(){
    $("#from").datepicker();
    $("#to").datepicker();
});

$('#search').click(function(){
    var from = $('#from').val();
    var to = $('#to').val();
    if(from != '' && to != '')
    {
        $.ajax({
            url: 'fetch.php',
            type: 'POST',
            data: {from:from,to:to},
            success: function(data){
                $('#result').html(data);
                $('#printBtn').show();
                $("a").attr("href", "pdf.php?from="+from+"&to="+to) 
            }
        })
    }
    else{
        alert("Please Select Date");
    }
});
    

    });
</script>


</body>

</html>