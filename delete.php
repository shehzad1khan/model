<?php 
 $link = mysqli_connect("localhost", "root", "", "e-commerce");

 if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM traders WHERE id = '$id'";
    $query = mysqli_query($link, $sql) or die(mysqli_error($link));
    if($query){
        header("location:list.php?record=deleted");
    }
 }

?>