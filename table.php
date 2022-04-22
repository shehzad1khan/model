<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
  <!-- online CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body">
  <div class="row">

    <?php 
      include 'navbar.php';
    ?>

    <div class="col-md-1 ml-auto"></div>
    <div class="col-md-10 col-lg-7 col-sm-10">
  
      <!---- Alert Record Inserted ---->
      <?php if (isset($_GET['record']) && $_GET['record'] == 'inserted') { ?>
        <div class="alert alert-success alert-dismissible fade show col-12" role="alert">
          <strong>Success!</strong> Record inserted successfully.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div> <?php } ?>

      <!---- Alert Record Deleted ---->
      <?php if (isset($_GET['record']) && $_GET['record'] == 'deleted') { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Record Deleted successfully.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>
      <!---- Alert Record Updated ---->
      <?php if (isset($_GET['record']) && $_GET['record'] == 'updated') { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Record Updated successfully.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php } ?>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-success mt-3 add">Add Record <i class="bi bi-plus-square-fill text-white"></i>
      </button>
      <h3 class="offset-4">E-Commerce Business Traders</h3>

      <!-- -- Table Start here -- -->
      <table id="example" class="border border-gray table table-responsive" style="width:auto">
        <thead>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Passport</th>
            <th>Contact</th>
            <th>Total Payment</th>
            <th>Advance Payment</th>
            <th>Due Payment</th>
            <th>Tracking Id</th>
            <th>Actions</th>

          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Passport</th>
            <th>Contact</th>
            <th>Total Payment</th>
            <th>Advance Payment</th>
            <th>Due Payment</th>
            <th>Tracking Id</th>
            <th>Actions</th>
          </tr>
        </tfooter>
      </table>
    </div>
    <div class="col-md-1 mr-auto"></div>
  </div>


  <!-- //////--Form Modal start--///// -->

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title offset-5" id="exampleModalLabel">ADD RECORD</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- --Dailog Form Tag-- -->
        <div class="modal-body">
          <form method="POST" action="insert.php" id="form" was-validated>
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
            <div class="form-group">
              <label for="tracking" class="col-form-label">Tracking Id:</label>
              <input type="text" id="tracking" class="form-control" name="tracking">
            </div>
            <div class="form-group mr-auto">
              <input type="submit" class=" btn btn-success offset-9" name="submit" value="Submit" id="submit">
              <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
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
              <button type="button" class="btn btn-danger me-auto p2" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-warning offset-8" data-dismiss="modal"><b>Print</b></button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- --view modal End-- -->

  <!-- Bootstrap core JavaScript-->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script> 

  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


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
      $('.view-btn').on('click',function() {        
        $('#table').html('');
        var id = $(this).attr('data-id');
        
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

      $('.edit-data').on('click', function() {
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

      // view Modal fucntion start
      $('.view-data').on('click', function() {
        var userid1 = $(this).data('id');
        $('#exampleModal2').modal('show');
            $('#name').val('');
            $('#passport').val('');
            $('#contact').val('');
            $('#email').val('');
            $('#total').val('');
            $('#advance').val('');
            $('#due').val('');
            $('#tracking').val('');
        
        $.ajax({
          url: "fetch.php?id=" + userid1,
          method: "GET",
          data: {
            userid1: userid1
          },
          dataType: "json",
          success: function(data) {
            console.log(data);
            $('#exampleModal2').modal('show');
            $('#name').val(data.name);
            $('#passport').val(data.passport_no);
            $('#contact').val(data.contact_no);
            $('#email').val(data.email);
            $('#total').val(data.total_payment);
            $('#advance').val(data.advance_payment);
            $('#due').val(data.due_payment);
            $('#tracking').val(data.tracking_id);
            // $('#submit').val("Update");
            // $('#exampleModalLabel2').html("User Record");
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

      $('.view-data').on('click', function() {
        $('#table')[0].reset();
        $('#exampleModal2').modal('show');
      });



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