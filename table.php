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

<body>
  <div class="row">
    <div class="col-md-1 ml-auto"></div>
    <div class="col-md-10">
      <!---- Alert Record Inserted ---->
      <?php if (isset($_GET['record']) && $_GET['record'] == 'inserted') { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
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
      <table id="example" class="table table-responsive table-striped" style="width:auto">
        <thead>
          <tr>
            <th>Name</th>
            <th>Passport_No</th>
            <th>Contact_No</th>
            <th>Total_Payment</th>
            <th>Advance_Payment</th>
            <th>Due_Payment</th>
            <th>Tracking_Id</th>
            <th>Actions</th>

          </tr>
        </thead>

        <?php
        $link = mysqli_connect("localhost", "root", "", "e-commerce");
        $sql = "SELECT * FROM traders";
        $query = mysqli_query($link, $sql);
        $rowcount = mysqli_num_rows($query);
        for ($j = 1; $j <= $rowcount; $j++) {
          $row = mysqli_fetch_array($query);
          $result = $row['total_payment'] - $row['advance_payment'];
        ?>
          <tbody>
            <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['passport_no']; ?></td>
              <td><?php echo $row['contact_no']; ?></td>
              <td><?php echo $row['total_payment']; ?></td>
              <td><?php echo $row['advance_payment']; ?></td>
              <td><?php echo $result; ?></td>
              <td><?php echo $row['tracking_id']; ?></td>
              <td>
                <a href="#" class="edit-data" data-id="<?php echo $row['id']; ?>"><i class="bi bi-pencil-square text-success"></i></a>

                <a href="delete.php?id=<?php echo $row['id']; ?>" data-id="<?php echo $row['id']; ?>" onClick="return confirm('ARE YOU SURE TO DELETE THIS RECORD?');"><i class="bi bi-trash3-fill text-danger"></i></a>

                <a href="#" class="view-btn" data-id='<?php echo $row['id']; ?>'><i class="bi bi-eye text-info"></i></a>
              </td>
            </tr>
          </tbody>
        <?php } ?>
        <tfoot>
          <tr>
            <th>Name</th>
            <th>Passport_No</th>
            <th>Contact_No</th>
            <th>Total_Payment</th>
            <th>Advance_Payment</th>
            <th>Due_Payment</th>
            <th>Tracking_Id</th>
            <th>Actions</th>
          </tr>
        </tfoot>
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
            <div class="form-row">
              <div class="col">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
              <div class="col">
                <label for="pass" class="col-form-label">Passport No:</label>
                <input type="text" class="form-control" id="passport" name="passport" required autofocus="true">
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="contact" class="col-form-label">Contact No:</label>
                <input type="text" class="form-control" id="contact" name="contact" required>
              </div>
              <div class="col">
                <label for="email" class="col-form-label">Email:</label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col">
                <label for="total" class="col-form-label">Total Payment:</label>
                <input type="text" onkeyup="cal()" id="total" class="input form-control" name="total" required>
              </div>
              <div class="col">
                <label for="advance" class="col-form-label">Advance Payment:</label>
                <input type="text"  onkeyup="cal()" id="advance" class="input form-control" name="advance" required>
              </div>
              <div class="col">
                <label for="due" class="col-form-label">Due Payment:</label>
                <input type="text" id="due" readonly class="form-control" name="due">
              </div>
            </div>
            <div class="form-group">
              <label for="tracking" class="col-form-label">Tracking Id:</label>
              <input type="text" id="tracking" class="form-control" name="tracking" required>
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
         <table class="border border-gray">
          <tr>
            <td>Name:</td>
            <td><?php echo $row['name']; ?></td>
          </tr>
          <tr>
            <td>Passport No:</td>
            <td><?php echo $row['passport_no']; ?></td>
          </tr>
          <tr>
            <td>Contact No:</td>
            <td><?php echo $row['contact_no']; ?></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><?php echo $row['email']; ?></td>
          </tr>
          <tr>
            <td>Total Payment:</td>
            <td><?php echo $row['total_payment']; ?></td>
          </tr>
          <tr>
            <td>Advance Payment:</td>
            <td><?php echo $row['advance_payment']; ?></td>
          </tr>
          <tr>
            <td>Due Payment:</td>
            <td><?php echo $row['due_payment']; ?></td>
          </tr>
          <tr>
            <td>Tracking Id:</td>
            <td><?php echo $row['tracking_id']; ?></td>
          </tr>
         </table> 
            
            
            <div class="form-group mr-auto">
              <button type="button" class="btn btn-danger ml-2" data-dismiss="modal">Close</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- --view modal End-- -->

  <!-- Bootstrap core JavaScript-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>



  <script>
    $(document).ready(function() {
      $('#example').DataTable();

      // view Modal fucntion start
      $('.view-btn').on('click',function() {        
        
        id: $(this).attr('data-id');
        
        // $.ajax({
        //   url: 'show.php',
        //   type: 'POST',
        //   data: {},
        //   success: function(response) {
        //     $('#exampleModal2').html(response);
        //   }
        // });
        $('#exampleModal2').modal('show');        
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
            $('#name').val(data.name);
            $('#passport').val(data.passport_no);
            $('#contact').val(data.contact_no);
            $('#email').val(data.email);
            $('#total').val(data.total_payment);
            $('#advance').val(data.advance_payment);
            $('#due').val(data.due_payment);
            $('#tracking').val(data.tracking_id);
            $('#submit').val("Update");
            $('#exampleModalLabel').html("Update Record");
          }
        });
      });
    

      $('.add').on('click', function() {
        $('#form')[0].reset();
        $('#exampleModal').modal('show');
        $('#exampleModalLabel').html("Add Record");
        $('#submit').val("Submit");
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