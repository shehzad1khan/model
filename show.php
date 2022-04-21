<?php 
 $link = mysqli_connect("localhost", "root", "", "e-commerce");

    if(isset($_GET['id'])){
       $id = $_GET['id'];
       $query = "SELECT * FROM traders WHERE id = '$id'";
       $result = mysqli_query($link, $query);
<<<<<<< HEAD
       $row = mysqli_fetch_array($result);
       echo json_encode($row);
    }
  ?>
=======
       $row1 = mysqli_fetch_array($result);
       echo json_encode($row);
    }
    ?>
>>>>>>> 4e34f8a94b93f938e0d9f2e576ec9436fdc875df
