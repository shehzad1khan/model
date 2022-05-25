<?php 

include('database.php');

 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM traders WHERE id = '$id'";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));
    if($query){
        // header("location:list.php?record=deleted");
         echo "<script>window.open('list.php?record=deleted','_self')</script>";
    }
 }

 if(isset($_GET['file_id'])){
    $id = $_GET['file_id'];
    $sql = "DELETE FROM files WHERE id = '$id'";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));
    if($query){
      echo "Successfully Deleted!";
    }
    else
    {
      echo "Some Error!";
    }
 }
?>